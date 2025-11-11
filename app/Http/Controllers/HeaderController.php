<?php

namespace App\Http\Controllers;

use App\Models\CdMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class HeaderController extends Controller
{
    // Show all headers
    public function show_header()
    {
        $menu = CdMenu::get();
        return view('admin.particular.header.index', compact('menu'));
    }

    // Show create header view
    public function create_header_view()
    {
        return view('admin.particular.header.create');
    }

    // Handle create header request
    public function create_header(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'icon'  => ['required'],
            'slug'  => ['nullable', 'string'], // <-- no uniqueness
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        }

        $slug = $request->slug ?: Str::slug($request->title);

        $menu = new CdMenu();
        $menu->title = $request->title;
        $menu->icon  = $request->icon;
        $menu->slug  = $slug;

        if ($menu->save()) {
            return response()->json([
                "message" => "Menu Created Successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Something Went Wrong"
            ], 302);
        }
    }

    // Show update header view
    public function update_header_view($id)
    {
        $menu = CdMenu::find($id);

        if ($menu) {
            return view('admin.particular.header.update', compact('menu'));
        } else {
            return redirect('/admin/header');
        }
    }

    // Handle update header request
    public function update_header(Request $request, $id)
    {
        $menu = CdMenu::find($id);

        if (!$menu) {
            return response()->json([
                "message" => "Record not found"
            ], 302);
        }

        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'icon'  => ['required'],
            'slug'  => ['nullable', 'string'], // <-- no uniqueness
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        }

        $slug = $request->slug ?: Str::slug($request->title);

        $updated = $menu->update([
            'title' => $request->title,
            'icon'  => $request->icon,
            'slug'  => $slug,
        ]);

        if ($updated) {
            return response()->json([
                "message" => "Menu Updated Successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Something went wrong"
            ], 302);
        }
    }

    // Delete a header
    public function delete_header($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of header for deleting"
            ], 302);
        }

        $menu = CdMenu::find($id);

        if (!$menu) {
            return response()->json([
                "message" => "Record not found or already deleted"
            ], 302);
        }

        if ($menu->delete()) {
            return response()->json([
                "message" => "Header Deleted Successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Something went wrong!"
            ], 302);
        }
    }
}
