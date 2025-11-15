<?php

namespace App\Http\Controllers;

use App\Models\CdCategory;
use App\Models\CdTeamMember;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class TeamMemberController extends Controller
{
    public function create_team_member(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', Rule::unique('cd_team_members')],
            'category_id' => ['required'],
            'designation' => 'required',
            'description' => 'required',
            'image' => ['required', Rule::imageFile(), 'max:500'],
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
            $career = new CdTeamMember();
            $career->name = $request->name;
            $career->designation = $request->designation;
            $career->category_id = $request->category_id;
            $career->description = $request->description;
            $career->alt = $request->alt;
            $career->image = $path;
            $result = $career->save();
            if ($result) {
                return response()->json([
                    "message" => "Team Member Created Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something Went Wrong"
                ], 302);
            }
        }
    }

    public function delete_team_member($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of career for deleting"
            ], 302);
        }
        if (CdTeamMember::where('id', $id)->count() > 0) {
            $CdTeamMember = CdTeamMember::where('id', $id)->delete();
            if ($CdTeamMember) {
                return response()->json([
                    "message" => "Team Member Deleted Successfully"
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
    public function show_team_member($id = null)
    {
        $career = CdTeamMember::get();
        return view('admin.home.team_member.index', compact('career'));
    }
    public function update_team_member(Request $request, $id)
    {
        if (CdTeamMember::where('id', $id)->count() > 0) {
            if ($request->file('image')) {
                $validator = Validator::make($request->all(), [
                    'name' => ['required',],
                    'category_id' => ['nullable'],
                    'designation' => 'required',
                    'description' => 'required',
                    'image' => ['required', Rule::imageFile(), 'max:500'],
                ]);
                $path = $request->file('image')->store('upload/team_member');
            } else {
                $validator = Validator::make($request->all(), [
                    'name' => ['required',],
                    'category_id' => ['nullable'],
                    'designation' => 'required',
                    'description' => 'required',
                ]);
            }
            if (CdTeamMember::where('id', '!=', $id)->where('name', 'LIKE', $request->name)->count() > 0) {
                return response()->json([
                    "message" => "The Name Has Already Been Taken"
                ], 302);
            }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                if ($request->file('image')) {
                    $CdTeamMember = CdTeamMember::where('id', $id)->update([
                        'name' => $request->name,
                        'designation' => $request->designation,
                        'category_id' => $request->category_id ?? null,
                        'description' => $request->description,
                        'alt' => $request->alt,
                        'image' => $path,
                    ]);
                } else {
                    $CdTeamMember = CdTeamMember::where('id', $id)->update([
                        'name' => $request->name,
                        'designation' => $request->designation,
                        'category_id' => $request->category_id ?? null,
                        'description' => $request->description,
                        'alt' => $request->alt,
                    ]);
                }
                if ($CdTeamMember) {
                    return response()->json([
                        "message" => "Team Member Updated Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something went wrong"
                    ], 302);
                }
            }
        }
    }

    public function create_team_member_view()
    {
        $sub_categories = CdCategory::whereNull('parent')->whereHas('menu',function($query){
            return $query->where('title', 'LIKE', '%Our Division%');
        })->get();
        return view('admin.home.team_member.create',compact('sub_categories'));
    }

    public function update_team_member_view($id)
    {
        $menu = CdTeamMember::where('id', $id);
        if ($menu->count() > 0) {
            $menu = $menu->first();
            $sub_categories = CdCategory::whereNull('parent')->whereHas('menu',function($query){
                return $query->where('title', 'LIKE', '%Our Division%');
            })->get();
            return view('admin.home.team_member.update', compact('menu','sub_categories'));
        } else {
            return redirect('/admin/team_member');
        }
    }
}