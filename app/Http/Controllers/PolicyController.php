<?php

namespace App\Http\Controllers;

use App\Models\CdPolicy;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class PolicyController extends Controller
{
    public function create_policy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => ['required', Rule::unique('cd_policies')],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
            $menu = new CdPolicy();
            $menu->description = $request->description;
            $result = $menu->save();
            if ($result) {
                return response()->json([
                    "message" => "Policiy Created Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something Went Wrong"
                ], 302);
            }
        }
    }

    public function delete_policy($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of header for deleting"
            ], 302);
        }
        if (CdPolicy::where('id', $id)->count() > 0) {
            $CdPolicy = CdPolicy::where('id', $id)->delete();
            if ($CdPolicy) {
                return response()->json([
                    "message" => "Policiy Deleted Successfully"
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
    public function show_policy($id = null)
    {
        $menu = CdPolicy::get();
        return view('admin.home.policies.index', compact('menu'));
    }
    public function update_policy(Request $request, $id)
    {
        if (CdPolicy::where('id', $id)->count() > 0) {
            $validator = Validator::make($request->all(), [
                'description' => ['required'],
            ]);
            if (CdPolicy::where('id', '!=', $id)->where('description', 'LIKE', $request->description)->count() > 0) {
                return response()->json([
                    "message" => "The Name Has Already Been Taken"
                ], 302);
            }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                $CdPolicy = CdPolicy::where('id', $id)->update([
                    'description' => $request->description,
                ]);
                if ($CdPolicy) {
                    return response()->json([
                        "message" => "Policiy Updated Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something went wrong"
                    ], 302);
                }
            }
        }
    }

    public function create_policy_view()
    {
        return view('admin.home.policies.create');
    }

    public function update_policy_view($id)
    {
        $menu = CdPolicy::where('id', $id);
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.home.policies.update', compact('menu'));
        } else {
            return redirect('/admin/policy');
        }
    }
}
