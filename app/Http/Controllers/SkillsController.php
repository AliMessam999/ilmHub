<?php

namespace App\Http\Controllers;

use App\Models\CdSkill;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class SkillsController extends Controller
{
    public function create_skills(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', Rule::unique('cd_skills')],
            'percentage' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
                $menu = new CdSkill();
                $menu->title = $request->title;
                $menu->percentage = $request->percentage;
                $result = $menu->save();
                if ($result) {
                    return response()->json([
                        "message" => "Skills Created Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something Went Wrong"
                    ], 302);
                }
        }
    }

    public function delete_skills($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of header for deleting"
            ], 302);
        }
        if (CdSkill::where('id', $id)->count() > 0) {
            $CdSkill = CdSkill::where('id', $id)->delete();
            if ($CdSkill) {
                return response()->json([
                    "message" => "Skills Deleted Successfully"
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
    public function show_skills($id = null)
    {
        $menu = CdSkill::get();
        return view('admin.home.skills.index', compact('menu'));
    }
    public function update_skills(Request $request, $id)
    {
        if (CdSkill::where('id', $id)->count() > 0) {
                $validator = Validator::make($request->all(), [
                    'title' => ['required'],
                    'percentage' => ['required'],
                ]);
            if (CdSkill::where('id', '!=', $id)->where('title', 'LIKE', $request->title)->count() > 0) {
                return response()->json([
                    "message" => "The Name Has Already Been Taken"
                ], 302);
            }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                        $CdSkill = CdSkill::where('id', $id)->update([
                            'title' => $request->title,
                            'percentage' => $request->percentage,
                        ]);
                        if ($CdSkill) {
                            return response()->json([
                                "message" => "Skills Updated Successfully"
                            ], 200);
                        } else {
                            return response()->json([
                                "message" => "Something went wrong"
                            ], 302);
                        }
                    }
            }
    }

    public function create_skills_view()
    {
        return view('admin.home.skills.create');
    }

    public function update_skills_view($id)
    {
        $menu = CdSkill::where('id', $id);
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.home.skills.update', compact('menu'));
        } else {
            return redirect('/admin/skills');
        }
    }
}
