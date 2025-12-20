<?php

namespace App\Http\Controllers;

use App\Models\CdClient;
use App\Models\CdFeature;
use App\Models\CdCategory;
use Illuminate\Http\Request;
use App\Models\CdFeatureImage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class FeaturedController extends Controller
{
    public function create_featured(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', Rule::unique('cd_features')],
            'icon' => 'required',
            'description' => 'required',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'alts' => 'required|array',
            'alts.*' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
            
            $career = new CdFeature();
            $career->title = $request->title;
            $career->icon = $request->icon;
            $career->description = $request->description;
            $career->sub_category_id = $request->sub_category_id;
            $career->client_name = $request->client_name;
            $career->funded_by = $request->funded_by;
            $career->location = $request->location;
            $career->industry = $request->industry;
            $career->website = $request->website;

            $career->alt = $request->alt;
            $result = $career->save();

            // Handle multiple sub-categories
            if ($request->has('sub_category_ids') && is_array($request->sub_category_ids)) {
                $career->subCategories()->sync($request->sub_category_ids);
            }

            foreach ($request->file('images') as $index => $item) {
                $path = $item->store('upload/featured');
                if (!$path) {
                    return response()->json([
                        "message" => "File not store try again!"
                    ], 302);
                }
                $cdFeatureImage = new CdFeatureImage();
                $cdFeatureImage->feature_id = $career->id;
                $cdFeatureImage->image = $path;
                $cdFeatureImage->alt = $request->alts[$index] ?? '';
                $result2 = $cdFeatureImage->save();
            }

            if ($result2) {
                return response()->json([
                    "message" => "Feature Created Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something Went Wrong"
                ], 302);
            }
        }
    }

    public function delete_featured($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of Feature for deleting"
            ], 302);
        }
        if (CdFeature::where('id', $id)->count() > 0) {
            $CdFeature = CdFeature::where('id', $id)->delete();
            if ($CdFeature) {
                return response()->json([
                    "message" => "Featured Deleted Successfully"
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
    public function show_featured($id = null)
    {
        $menu = CdFeature::with('subCategories')->get();
        return view('admin.home.featured_services.index', compact('menu'));
    }


    public function update_featured(Request $request, $id)
    {
        // Debug: Log the request data
        \Log::info('Update request data:', $request->all());
        
        $feature = CdFeature::find($id);
        if (!$feature) {
            return response()->json(["message" => "Feature not found"], 404);
        }

        // Validation rules
        $rules = [
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'alts' => 'nullable|array',
            'alts.*' => 'nullable|string'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        }

        // Check for duplicate title (excluding current record)
        if (CdFeature::where('id', '!=', $id)->where('title', $request->title)->exists()) {
            return response()->json(["message" => "The title has already been taken"], 302);
        }

        // Handle new image uploads and replacements
        if ($request->hasFile('images')) {
            $replaceIds = $request->replace_image_ids ?? [];
            
            foreach ($request->file('images') as $index => $item) {
                if ($item) {
                    $path = $item->store('upload/featured');
                    if (!$path) {
                        return response()->json(["message" => "File not stored, try again!"], 302);
                    }

                    // Check if this is a replacement for existing image
                    if (isset($replaceIds[$index]) && $replaceIds[$index]) {
                        $imageId = $replaceIds[$index];
                        CdFeatureImage::where('id', $imageId)->update([
                            'image' => $path,
                            'alt' => $request->alts[$index] ?? ''
                        ]);
                    } else {
                        // Create new image
                        $cdFeatureImage = new CdFeatureImage();
                        $cdFeatureImage->feature_id = $id;
                        $cdFeatureImage->image = $path;
                        $cdFeatureImage->alt = $request->alts[$index] ?? '';
                        $cdFeatureImage->save();
                    }
                }
            }
        }

        // Handle image deletions
        if ($request->has('deleted_images')) {
            CdFeatureImage::whereIn('id', $request->deleted_images)->delete();
        }

        // Update existing image alt texts
        if ($request->has('existing_images') && $request->has('alts')) {
            $existingImages = $request->existing_images;
            $alts = $request->alts;
            
            foreach ($existingImages as $index => $imageId) {
                if (isset($alts[$index])) {
                    CdFeatureImage::where('id', $imageId)->update(['alt' => $alts[$index]]);
                }
            }
        }

        // Update feature record
        $feature->update([
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description,
            'sub_category_id' => $request->sub_category_id,
            'client_name' => $request->client_name,
            'funded_by' => $request->funded_by,
            'location' => $request->location,
            'industry' => $request->industry,
            'website' => $request->website,

            'alt' => $request->alt,
        ]);

        // Handle multiple sub-categories
        if ($request->has('sub_category_ids') && is_array($request->sub_category_ids)) {
            $feature->subCategories()->sync($request->sub_category_ids);
        }

        return response()->json(["message" => "Feature updated successfully"], 200);
    }


    public function create_featured_view()
    {
        $data['categories'] = CdCategory::where('parent', '!=', NULL)->get();
        $data['clients'] = CdClient::all();

        return view('admin.home.featured_services.create', $data);
    }

    public function update_featured_view($id)
    {
        $data['categories'] = CdCategory::where('parent', '!=', NULL)->get();
        $data['clients'] = CdClient::all();

        $menu = CdFeature::where('id', $id);
        if ($menu->count() > 0) {
            $data['menu'] = $menu->with(['images', 'subCategories'])->first();
            return view('admin.home.featured_services.update', $data);
        } else {
            return redirect('/admin/featured');
        }
    }
}