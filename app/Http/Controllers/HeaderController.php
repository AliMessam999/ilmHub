<?php

namespace App\Http\Controllers;

use App\Models\CdCategory;
use App\Models\CdMenu;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class HeaderController extends Controller
{
    public function create_header(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', Rule::unique('cd_menus')],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
                $menu = new CdMenu();
                $menu->title = $request->title;
                $menu->icon = $request->icon;
                $result = $menu->save();
                if ($result) {
                    return response()->json([
                        "message" => "Menu Created Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something Went Wrong"
                    ], 302);
                }
        }
    }

    public function delete_header($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of header for deleting"
            ], 302);
        }
        if (CdMenu::where('id', $id)->count() > 0) {
            $CdMenu = CdMenu::where('id', $id)->delete();
            if ($CdMenu) {
                return response()->json([
                    "message" => "Header Deleted Successfully"
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
    public function show_header($id = null)
    {
        $menu = CdMenu::get();
        return view('admin.particular.header.index', compact('menu'));
    }
    public function update_header(Request $request, $id)
    {
        if (CdMenu::where('id', $id)->count() > 0) {
                $validator = Validator::make($request->all(), [
                    'title' => ['required'],
                    'icon' => ['required'],
                ]);
            if (CdMenu::where('id', '!=', $id)->where('title', 'LIKE', $request->title)->count() > 0) {
                return response()->json([
                    "message" => "The Name Has Already Been Taken"
                ], 302);
            }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                        $CdMenu = CdMenu::where('id', $id)->update([
                            'title' => $request->title,
                            'icon' => $request->icon,
                        ]);
                        if ($CdMenu) {
                            return response()->json([
                                "message" => "Menu Updated Successfully"
                            ], 200);
                        } else {
                            return response()->json([
                                "message" => "Something went wrong"
                            ], 302);
                        }
                    }
            }
    }

    public function create_header_view()
    {
        return view('admin.particular.header.create');
    }

    public function update_header_view($id)
    {
        $menu = CdMenu::where('id', $id);
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.particular.header.update', compact('menu'));
        } else {
            return redirect('/admin/header');
        }
    }
}
