<?php

namespace App\Http\Controllers;

use App\Models\CdCategory;
use App\Models\CdTeamMember;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class TeamMemberController extends Controller
{
    /** CREATE TEAM MEMBER */
    public function create_team_member(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', Rule::unique('cd_team_members')],
            'category_id' => ['required'],
            'designation' => 'required',
            'division' => 'nullable|string|max:255',   // ← NULLABLE
            'description' => 'required',
            'image' => ['required', Rule::imageFile(), 'max:500'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        }

        $path = $request->file('image')->store('upload/career');

        if (!$path) {
            return response()->json([
                "message" => "File not stored, try again!"
            ], 302);
        }

        $career = new CdTeamMember();
        $career->name = $request->name;
        $career->designation = $request->designation;
        $career->division = $request->division ?? null;   // ← SAVING NULLABLE
        $career->category_id = $request->category_id;
        $career->description = $request->description;
        $career->alt = $request->alt;
        $career->image = $path;

        if ($career->save()) {
            return response()->json([
                "message" => "Team Member Created Successfully"
            ], 200);
        }

        return response()->json([
            "message" => "Something Went Wrong"
        ], 302);
    }



    /** DELETE TEAM MEMBER */
    public function delete_team_member($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter a valid ID"
            ], 302);
        }

        if (CdTeamMember::where('id', $id)->exists()) {

            if (CdTeamMember::where('id', $id)->delete()) {
                return response()->json([
                    "message" => "Team Member Deleted Successfully"
                ], 200);
            }

            return response()->json([
                "message" => "Something went wrong!"
            ], 302);

        } else {
            return response()->json([
                "message" => "Record not found or already deleted"
            ], 302);
        }
    }



    /** LIST TEAM MEMBERS */
    public function show_team_member($id = null)
    {
        $career = CdTeamMember::get();
        return view('admin.home.team_member.index', compact('career'));
    }



    /** UPDATE TEAM MEMBER */
    public function update_team_member(Request $request, $id)
    {
        if (!CdTeamMember::where('id', $id)->exists()) {
            return response()->json([
                "message" => "Record not found"
            ], 302);
        }

        // If updating image
        if ($request->file('image')) {

            $validator = Validator::make($request->all(), [
                'name' => ['required'],
                'category_id' => ['nullable'],
                'designation' => 'required',
                'division' => 'nullable|string|max:255',   // ← NULLABLE
                'description' => 'required',
                'image' => ['required', Rule::imageFile(), 'max:500'],
            ]);

            $path = $request->file('image')->store('upload/team_member');

        } else {

            $validator = Validator::make($request->all(), [
                'name' => ['required'],
                'category_id' => ['nullable'],
                'designation' => 'required',
                'division' => 'nullable|string|max:255',   // ← NULLABLE
                'description' => 'required',
            ]);

            $path = null;
        }

        if (CdTeamMember::where('id', '!=', $id)->where('name', $request->name)->exists()) {
            return response()->json([
                "message" => "The Name Has Already Been Taken"
            ], 302);
        }

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        }

        // Update logic
        $updateData = [
            'name' => $request->name,
            'designation' => $request->designation,
            'division' => $request->division ?? null,
            'category_id' => $request->category_id ?? null,
            'description' => $request->description,
            'alt' => $request->alt,
        ];

        if ($path !== null) {
            $updateData['image'] = $path;
        }

        $updated = CdTeamMember::where('id', $id)->update($updateData);

        if ($updated) {
            return response()->json([
                "message" => "Team Member Updated Successfully"
            ], 200);
        }

        return response()->json([
            "message" => "Something went wrong"
        ], 302);
    }



    /** CREATE VIEW */
    public function create_team_member_view()
    {
        $sub_categories = CdCategory::whereNull('parent')
            ->whereHas('menu', function ($query) {
                return $query->where('title', 'LIKE', '%Our Division%');
            })->get();

        return view('admin.home.team_member.create', compact('sub_categories'));
    }



    /** UPDATE VIEW */
    public function update_team_member_view($id)
    {
        $menu = CdTeamMember::where('id', $id)->first();

        if (!$menu) {
            return redirect('/admin/team_member');
        }

        $sub_categories = CdCategory::whereNull('parent')
            ->whereHas('menu', function ($query) {
                return $query->where('title', 'LIKE', '%Our Division%');
            })->get();

        return view('admin.home.team_member.update', compact('menu', 'sub_categories'));
    }
}
