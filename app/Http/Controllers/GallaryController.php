<?php

namespace App\Http\Controllers;

use App\Models\CdCategory;
use App\Models\CdGallary;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class GallaryController extends Controller
{
    public function create_gallary(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'category_id' => 'required',
            'image' => ['required', Rule::imageFile(), 'max:500'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
            $path = $request->file('image')->store('upload/gallary');
                if(!$path){
                    return response()->json([
                        "message" => "File not store try again!"
                    ], 302);
                }
                $menu = new CdGallary();
                $menu->title = $request->title;
                $menu->category_id = $request->category_id;
                $menu->description = $request->description;
                $menu->alt = $request->alt;
                $menu->image = $path;
                $result = $menu->save();
                if ($result) {
                    return response()->json([
                        "message" => "Gallary Created Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something Went Wrong"
                    ], 302);
                }
        }
    }

    public function delete_gallary($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of subcategory for deleting"
            ], 302);
        }
        if (CdGallary::where('id', $id)->count() > 0) {
            $CdGallary = CdGallary::where('id', $id)->delete();
            if ($CdGallary) {
                return response()->json([
                    "message" => "Gallary Deleted Successfully"
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
    public function show_gallary($id = null)
    {
        $menu = CdGallary::where('category_id','!=',NULL)->with('category')->get();
        return view('admin.gallary.index', compact('menu'));
    }
    public function update_gallary(Request $request, $id)
    {
        if (CdGallary::where('id', $id)->count() > 0) {
            if($request->file('image')){
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'category_id' => 'required',
                    'image' => ['required', Rule::imageFile(), 'max:500'],
                ]);
                $path = $request->file('image')->store('upload/gallary');
            }else{
                $validator = Validator::make($request->all(), [
                    'title' => ['required',],
                    'category_id' => 'required',
                ]);
            }
            // if (CdGallary::where('id', '!=', $id)->where('title', 'LIKE', $request->title)->count() > 0) {
            //     return response()->json([
            //         "message" => "The Name Has Already Been Taken"
            //     ], 302);
            // }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                if($request->file('image')){
                    $CdGallary = CdGallary::where('id', $id)->update([
                        'title' => $request->title,
                        'description' => $request->description,
                        'category_id' => $request->category_id,
                        'alt' => $request->alt,
                        'image' => $path,
                    ]);
                }else{
                    $CdGallary = CdGallary::where('id', $id)->update([
                        'title' => $request->title,
                        'description' => $request->description,
                        'category_id' => $request->category_id,
                         'alt' => $request->alt,
                    ]);
                }
                        if ($CdGallary) {
                            return response()->json([
                                "message" => "Gallary Updated Successfully"
                            ], 200);
                        } else {
                            return response()->json([
                                "message" => "Something went wrong"
                            ], 302);
                        }
                    }
            }
    }

    public function create_gallary_view()
    {
        $categories = CdCategory::where('parent',NULL)->get();
        return view('admin.gallary.create', compact('categories'));
    }

    public function update_gallary_view($id)
    {
        $menu = CdGallary::where('id', $id);
        $categories = CdCategory::where('parent',NULL)->get();
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.gallary.update', compact('menu','categories'));
        } else {
            return redirect('/admin/gallary');
        }
    }
}
