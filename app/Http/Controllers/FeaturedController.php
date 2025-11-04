<?php

namespace App\Http\Controllers;

use App\Models\CdFeature;
use Illuminate\Http\Request;
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
            'image' => ['required', Rule::imageFile(), 'max:500'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
            $path = $request->file('image')->store('upload/featured');
            if (!$path) {
                return response()->json([
                    "message" => "File not store try again!"
                ], 302);
            }
            $career = new CdFeature();
            $career->title = $request->title;
            $career->icon = $request->icon;
            $career->description = $request->description;
            $career->alt = $request->alt;
            $career->image = $path;
            $result = $career->save();
            if ($result) {
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
        $menu = CdFeature::get();
        return view('admin.home.featured_services.index', compact('menu'));
    }
    public function update_featured(Request $request, $id)
    {
        if (CdFeature::where('id', $id)->count() > 0) {
            if ($request->file('image')) {
                $validator = Validator::make($request->all(), [
                    'title' => ['required',],
                    'icon' => 'required',
                    'description' => 'required',
                    'image' => ['required', Rule::imageFile(), 'max:500'],
                        ]);
                $path = $request->file('image')->store('upload/featured');
            } else {
                $validator = Validator::make($request->all(), [
                    'title' => ['required',],
                    'icon' => 'required',
                    'description' => 'required',
                        ]);
            }
            if (CdFeature::where('id', '!=', $id)->where('title', 'LIKE', $request->title)->count() > 0) {
                return response()->json([
                    "message" => "The Name Has Already Been Taken"
                ], 302);
            }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                if ($request->file('image')) {
                    $menu = CdFeature::where('id', $id)->update([
                        'title' => $request->title,
                        'icon' => $request->icon,
                        'description' => $request->description,
                        'alt' => $request->alt,
                        'image' => $path,
                    ]);
                } else {
                    $menu = CdFeature::where('id', $id)->update([
                        'title' => $request->title,
                        'icon' => $request->icon,
                        'description' => $request->description,
                        'alt' => $request->alt,
                    ]);
                }
                if ($menu) {
                    return response()->json([
                        "message" => "Featured Updated Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something went wrong"
                    ], 302);
                }
            }
        }
    }

    public function create_featured_view()
    {
        return view('admin.home.featured_services.create');
    }

    public function update_featured_view($id)
    {
        $menu = CdFeature::where('id', $id);
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.home.featured_services.update', compact('menu'));
        } else {
            return redirect('/admin/featured');
        }
    }
}
