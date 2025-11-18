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
            'percentage' => 'required',
            'description' => 'nullable|string',
            'position' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        }

        $skill = new CdSkill();
        $skill->title = $request->title;
        $skill->percentage = $request->percentage;
        $skill->description = $request->description; // optional
        $skill->position = $request->position; // optional

        if ($skill->save()) {
            return response()->json([
                "message" => "Skills Created Successfully"
            ], 200);
        }

        return response()->json([
            "message" => "Something Went Wrong"
        ], 302);
    }


    public function delete_skills($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of header for deleting"
            ], 302);
        }

        if (CdSkill::where('id', $id)->exists()) {
            if (CdSkill::where('id', $id)->delete()) {
                return response()->json([
                    "message" => "Skills Deleted Successfully"
                ], 200);
            }

            return response()->json([
                "message" => "Something went wrong!"
            ], 302);
        }

        return response()->json([
            "message" => "Record not found or already deleted"
        ], 302);
    }


    public function show_skills()
    {
        $menu = CdSkill::get();
        return view('admin.home.skills.index', compact('menu'));
    }


    public function update_skills(Request $request, $id)
    {
        $skill = CdSkill::find($id);

        if (!$skill) {
            return response()->json([
                "message" => "Record not found"
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'percentage' => ['required'],
            'description' => 'nullable|string',
            'position' => 'nullable|string',
        ]);

        // Unique title check
        if (CdSkill::where('id', '!=', $id)->where('title', $request->title)->exists()) {
            return response()->json([
                "message" => "The Name Has Already Been Taken"
            ], 302);
        }

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        }

        // Update record
        $updated = $skill->update([
            'title' => $request->title,
            'percentage' => $request->percentage,
            'description' => $request->description, // optional
            'position' => $request->position, // optional
        ]);

        if ($updated) {
            return response()->json([
                "message" => "Skills Updated Successfully"
            ], 200);
        }

        return response()->json([
            "message" => "Something went wrong"
        ], 302);
    }


    public function create_skills_view()
    {
        return view('admin.home.skills.create');
    }


    public function update_skills_view($id)
    {
        $menu = CdSkill::find($id);

        if ($menu) {
            return view('admin.home.skills.update', compact('menu'));
        }

        return redirect('/admin/skills');
    }
}
