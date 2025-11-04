<?php

namespace App\Http\Controllers;

use App\Models\CdCoreValue;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class CoreValueController extends Controller
{
    public function create_core_value(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', Rule::unique('cd_core_values')],
            'description' => 'required',
            
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
            $career = new CdCoreValue();
            $career->title = $request->title;
            $career->description = $request->description;
            $result = $career->save();
            if ($result) {
                return response()->json([
                    "message" => "Core Values Created Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something Went Wrong"
                ], 302);
            }
        }
    }

    public function delete_core_value($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of Feature for deleting"
            ], 302);
        }
        if (CdCoreValue::where('id', $id)->count() > 0) {
            $CdCoreValue = CdCoreValue::where('id', $id)->delete();
            if ($CdCoreValue) {
                return response()->json([
                    "message" => "Core Values Deleted Successfully"
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
    public function show_core_value($id = null)
    {
        $menu = CdCoreValue::get();
        return view('admin.home.core_value.index', compact('menu'));
    }
    public function update_core_value(Request $request, $id)
    {
        if (CdCoreValue::where('id', $id)->count() > 0) {

                $validator = Validator::make($request->all(), [
                    'title' => ['required',],
                            'description' => 'required',
                        ]);
            if (CdCoreValue::where('id', '!=', $id)->where('title', 'LIKE', $request->title)->count() > 0) {
                return response()->json([
                    "message" => "The Name Has Already Been Taken"
                ], 302);
            }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                    $menu = CdCoreValue::where('id', $id)->update([
                        'title' => $request->title,
                        'description' => $request->description,
                    ]);
                if ($menu) {
                    return response()->json([
                        "message" => "Core Values Updated Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something went wrong"
                    ], 302);
                }
            }
        }
    }

    public function create_core_value_view()
    {
        return view('admin.home.core_value.create');
    }

    public function update_core_value_view($id)
    {
        $menu = CdCoreValue::where('id', $id);
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.home.core_value.update', compact('menu'));
        } else {
            return redirect('/admin/core_value');
        }
    }
}
