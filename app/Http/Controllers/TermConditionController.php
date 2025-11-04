<?php

namespace App\Http\Controllers;

use App\Models\CdTermCondition;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class TermConditionController extends Controller
{
    public function create_term_condition(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => ['required', Rule::unique('cd_term_conditions')],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
            $menu = new CdTermCondition();
            $menu->description = $request->description;
            $result = $menu->save();
            if ($result) {
                return response()->json([
                    "message" => "Term & Conditions Created Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something Went Wrong"
                ], 302);
            }
        }
    }

    public function delete_term_condition($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of header for deleting"
            ], 302);
        }
        if (CdTermCondition::where('id', $id)->count() > 0) {
            $CdTermCondition = CdTermCondition::where('id', $id)->delete();
            if ($CdTermCondition) {
                return response()->json([
                    "message" => "Term & Conditions Deleted Successfully"
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
    public function show_term_condition($id = null)
    {
        $menu = CdTermCondition::get();
        return view('admin.home.term_condition.index', compact('menu'));
    }
    public function update_term_condition(Request $request, $id)
    {
        if (CdTermCondition::where('id', $id)->count() > 0) {
            $validator = Validator::make($request->all(), [
                'description' => ['required'],
            ]);
            if (CdTermCondition::where('id', '!=', $id)->where('description', 'LIKE', $request->description)->count() > 0) {
                return response()->json([
                    "message" => "The Name Has Already Been Taken"
                ], 302);
            }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                $CdTermCondition = CdTermCondition::where('id', $id)->update([
                    'description' => $request->description,
                ]);
                if ($CdTermCondition) {
                    return response()->json([
                        "message" => "Term & Conditions Updated Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something went wrong"
                    ], 302);
                }
            }
        }
    }

    public function create_term_condition_view()
    {
        return view('admin.home.term_condition.create');
    }

    public function update_term_condition_view($id)
    {
        $menu = CdTermCondition::where('id', $id);
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.home.term_condition.update', compact('menu'));
        } else {
            return redirect('/admin/term_condition');
        }
    }
}
