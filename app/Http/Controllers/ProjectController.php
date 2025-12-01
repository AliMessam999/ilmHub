<?php

namespace App\Http\Controllers;

use App\Models\CdCategory;
use App\Models\CdSolution;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CustomerService;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function create_project(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255', // ✅ ADDED: Title validation
            'category_id' => ['required', Rule::unique('cd_solutions')],
            'description' => 'required',
            'image' => ['required', Rule::imageFile(), 'max:500'],
            'alt' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
            $path = $request->file('image')->store('upload/project');
            if (!$path) {
                return response()->json([
                    "message" => "File not store try again!"
                ], 302);
            }
            $project = new CdSolution();
            $project->title = $request->title;
            $project->slug = $request->slug;
            $project->category_id = $request->category_id;
            $project->description = $request->description;
            $project->alt = $request->alt;
            $project->image = $path;
            $project->type = 'Project';
            $result = $project->save();

            if ($result) {
                // Customer Services
                $customer_services = [];
                $titles = $request->service_titles;
                $descs  = $request->service_descriptions;
                $labels = $request->service_labels;
                $images = $request->file('service_images');

                foreach ($titles as $index => $title) {
                    if ($title) {
                        $imagePath = null;
                        if (isset($images[$index]) && $images[$index]) {
                            $imagePath = $images[$index]->store('upload/customer_services');
                        }
                        
                        array_push($customer_services, [
                            'solution_id' => $project->id,
                            'title'       => $title,
                            'label'       => $labels[$index] ?? null,
                            'description' => $descs[$index] ?? null,
                            'image'       => $imagePath,
                        ]);
                    }
                }

                CustomerService::insert($customer_services);

                // FAQs
                $faqs = [];
                $faq_titles = $request->faq_titles;
                $faq_descriptions = $request->faq_descriptions;

                if ($faq_titles) {
                    foreach ($faq_titles as $index => $title) {
                        if ($title) {
                            array_push($faqs, [
                                'sub_category_id' => $request->category_id,
                                'title' => $title,
                                'description' => $faq_descriptions[$index] ?? null,
                            ]);
                        }
                    }

                    if (!empty($faqs)) {
                        \App\Models\CdFaq::insert($faqs);
                    }
                }

                return response()->json([
                    "message" => "Solution Created Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something Went Wrong"
                ], 302);
            }
        }
    }

    public function delete_project($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of project for deleting"
            ], 302);
        }
        if (CdSolution::where('id', $id)->count() > 0) {
            $CdSolution = CdSolution::where('id', $id)->delete();
            if ($CdSolution) {
                return response()->json([
                    "message" => "Solution Deleted Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something went wrong!"
                ], 302);
            }
        } else {
            return response()->json([
                "message" => "Record not found or already deleted"
            ], 302);
        }
    }

    public function show_project($id = null)
    {
        $project = CdSolution::where('type', 'Project')->with('category')->get();
        return view('admin.project.index', compact('project'));
    }

    public function update_project(Request $request, $id)
    {
        $CdSolution = CdSolution::find($id);
        if (!$CdSolution) {
            return response()->json(["message" => "Record not found"], 404);
        }

        // Validate depending on image
        $rules = [
            'title' => 'required|string|max:255', // ✅ ADDED: Title validation
            'category_id' => 'required',
            'description' => 'required',
            'alt' => 'required'
        ];

        if ($request->file('image')) {
            $rules['image'] = ['required', Rule::imageFile(), 'max:500'];
        }

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        }

        // Check unique category
        if (CdSolution::where('id', '!=', $id)->where('category_id', $request->category_id)->exists()) {
            return response()->json(["message" => "The Name Has Already Been Taken"], 302);
        }

        // Update image if uploaded
        if ($request->file('image')) {
            $path = $request->file('image')->store('upload/project');
            $CdSolution->image = $path;
        }

        // Update basic fields
        $CdSolution->update([
            'title'        => $request->title, // ✅ ADDED: Title field
            'slug'         => $request->slug,
            'category_id'  => $request->category_id,
            'description'  => $request->description,
            'alt'          => $request->alt,
            'image'        => $CdSolution->image ?? $CdSolution->image
        ]);

        // ✅ FIXED: Update customer services with image preservation
        if ($request->filled('service_titles')) {

            CustomerService::where('solution_id', $id)->delete();

            $customer_services = [];
            $images = $request->file('service_images');
            $existing_images = $request->existing_service_images ?? []; // ✅ ADDED: Get existing images
            
            foreach ($request->service_titles as $i => $title) {
                if ($title) {
                    $imagePath = null;
                    
                    // ✅ FIXED: Check if new image was uploaded
                    if (isset($images[$i]) && $images[$i]) {
                        $imagePath = $images[$i]->store('upload/customer_services');
                    }
                    // ✅ ADDED: Use existing image if no new image uploaded
                    elseif (isset($existing_images[$i]) && !empty($existing_images[$i])) {
                        $imagePath = $existing_images[$i];
                    }
                    
                    $customer_services[] = [
                        'solution_id' => $id,
                        'title'       => $title,
                        'label'       => $request->service_labels[$i] ?? null,
                        'description' => $request->service_descriptions[$i] ?? null,
                        'image'       => $imagePath
                    ];
                }
            }

            if ($customer_services) {
                CustomerService::insert($customer_services);
            }
        }

        // Update FAQs
        if ($request->filled('faq_titles')) {
            \App\Models\CdFaq::where('sub_category_id', $CdSolution->category_id)->delete();

            $faqs = [];
            foreach ($request->faq_titles as $i => $title) {
                if ($title) {
                    $faqs[] = [
                        'sub_category_id' => $CdSolution->category_id,
                        'title' => $title,
                        'description' => $request->faq_descriptions[$i] ?? null
                    ];
                }
            }

            if ($faqs) {
                \App\Models\CdFaq::insert($faqs);
            }
        }

        return response()->json(["message" => "Solution Updated Successfully"], 200);
    }

    public function create_project_view()
    {
        $sub_categories = CdCategory::where('parent', '!=', NULL)->get();
        return view('admin.project.create', compact('sub_categories'));
    }

    public function update_project_view($id)
    {
        $sub_categories = CdCategory::where('parent', '!=', NULL)->get();
        $menu = CdSolution::where('id', $id)->with('customer_services');
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.project.update', compact('menu', 'sub_categories'));
        } else {
            return redirect('/admin/project');
        }
    }
}