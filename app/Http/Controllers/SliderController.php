<?php

namespace App\Http\Controllers;

use App\Models\CdSlider;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function create_slider(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', Rule::unique('cd_sliders')],
            'description' => 'required',
            'image' => ['required', Rule::imageFile(), 'max:500'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
            $path = $request->file('image')->store('upload/slider');
            if (!$path) {
                return response()->json([
                    "message" => "File not store try again!"
                ], 302);
            }
            $menu = new CdSlider();
                $menu->title = $request->title;
                $menu->description = $request->description;
                $menu->alt = $request->alt;
                $menu->image = $path;
                $result = $menu->save();
                if ($result) {
                    return response()->json([
                        "message" => "Slider Created Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something Went Wrong"
                    ], 302);
                }
            }
        }

    public function delete_slider($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of slider for deleting"
            ], 302);
        }
        if (CdSlider::where('id', $id)->count() > 0) {
            $CdSlider = CdSlider::where('id', $id)->delete();
            if ($CdSlider) {
                return response()->json([
                    "message" => "Slider Deleted Successfully"
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
    public function show_slider($id = null)
    {
        $menu = CdSlider::get();
        return view('admin.home.slider.index', compact('menu'));
    }
    public function update_slider(Request $request, $id)
    {
        if (CdSlider::where('id', $id)->count() > 0) {
            if ($request->file('image')) {
                $validator = Validator::make($request->all(), [
                    'title' => ['required',],
                    'description' => 'required',
                    'image' => ['required', Rule::imageFile(), 'max:500'],
                ]);
                $path = $request->file('image')->store('upload/slider');
            } else {
                $validator = Validator::make($request->all(), [
                    'title' => ['required',],
                    'description' => 'required',
                ]);
            }
            if (CdSlider::where('id', '!=', $id)->where('title', 'LIKE', $request->title)->count() > 0) {
                return response()->json([
                    "message" => "The Name Has Already Been Taken"
                ], 302);
            }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                if ($request->file('image')) {
                    $CdSlider = CdSlider::where('id', $id)->update([
                        'title' => $request->title,
                        'description' => $request->description,
                        'alt' => $request->alt,
                        'image' => $path,
                    ]);
                } else {
                    $CdSlider = CdSlider::where('id', $id)->update([
                        'title' => $request->title,
                        'description' => $request->description,
                        'alt' => $request->alt,
                    ]);
                }
                if ($CdSlider) {
                    return response()->json([
                        "message" => "Slider Updated Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something went wrong"
                    ], 302);
                }
            }
        }
    }

    public function create_slider_view()
    {
        return view('admin.home.slider.create');
    }

    public function update_slider_view($id)
    {
        $menu = CdSlider::where('id', $id);
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.home.slider.update', compact('menu'));
        } else {
            return redirect('/admin/slider');
        }
    }
}
