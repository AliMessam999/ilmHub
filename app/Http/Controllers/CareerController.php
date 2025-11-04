<?php

namespace App\Http\Controllers;

use App\Models\CdCareer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class CareerController extends Controller
{
    //
    public function create_career(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', Rule::unique('cd_careers')],
            'icon' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'image' => ['required', Rule::imageFile(), 'max:500'],
            'email' => ['required'],
            'last_date_to_apply' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
            $path = $request->file('image')->store('upload/career');
            if (!$path) {
                return response()->json([
                    "message" => "File not store try again!"
                ], 302);
            }
            $career = new CdCareer();
            $career->title = $request->title;
            $career->icon = $request->icon;
            $career->description = $request->description;
            $career->short_description = $request->short_description;
            $career->alt = $request->alt;
            $career->email = $request->email;
            $career->last_date_to_apply = $request->last_date_to_apply;
            $career->image = $path;
            $result = $career->save();
            if ($result) {
                return response()->json([
                    "message" => "Career Created Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something Went Wrong"
                ], 302);
            }
        }
    }

    public function delete_career($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of career for deleting"
            ], 302);
        }
        if (CdCareer::where('id', $id)->count() > 0) {
            $CdCareer = CdCareer::where('id', $id)->delete();
            if ($CdCareer) {
                return response()->json([
                    "message" => "Career Deleted Successfully"
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
    public function show_career($id = null)
    {
        $career = CdCareer::get();
        return view('admin.career.index', compact('career'));
    }
    public function update_career(Request $request, $id)
    {
        if (CdCareer::where('id', $id)->count() > 0) {
            if ($request->file('image')) {
                $validator = Validator::make($request->all(), [
                    'title' => ['required',],
                    'icon' => 'required',
                    'description' => 'required',
                    'image' => ['required', Rule::imageFile(), 'max:500'],
                    'email' => ['required'],
                    'last_date_to_apply' => 'required',

                    'short_description' => 'required',
                ]);
                $path = $request->file('image')->store('upload/career');
            } else {
                $validator = Validator::make($request->all(), [
                    'title' => ['required',],
                    'icon' => 'required',
                    'description' => 'required',
                    'email' => ['required'],
                    'last_date_to_apply' => 'required',

                    'short_description' => 'required',
                ]);
            }
            if (CdCareer::where('id', '!=', $id)->where('title', 'LIKE', $request->title)->count() > 0) {
                return response()->json([
                    "message" => "The Name Has Already Been Taken"
                ], 302);
            }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                if ($request->file('image')) {
                    $CdCareer = CdCareer::where('id', $id)->update([
                        'title' => $request->title,
                        'icon' => $request->icon,
                        'description' => $request->description,
                        'short_description' => $request->short_description,
                        'alt' => $request->alt,
                        'email' => $request->email,
                        'last_date_to_apply' => $request->last_date_to_apply,
                        'image' => $path,
                    ]);
                } else {
                    $CdCareer = CdCareer::where('id', $id)->update([
                        'title' => $request->title,
                        'icon' => $request->icon,
                        'description' => $request->description,
                        'short_description' => $request->short_description,
                        'email' => $request->email,
                        'last_date_to_apply' => $request->last_date_to_apply,
                        'alt' => $request->alt,
                    ]);
                }
                if ($CdCareer) {
                    return response()->json([
                        "message" => "Career Updated Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something went wrong"
                    ], 302);
                }
            }
        }
    }

    public function create_career_view()
    {
        return view('admin.career.create');
    }

    public function update_career_view($id)
    {
        $menu = CdCareer::where('id', $id);
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.career.update', compact('menu'));
        } else {
            return redirect('/admin/career');
        }
    }
}
