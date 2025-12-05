<?php

namespace App\Http\Controllers;

use App\Models\CdCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    // Create SubCategory
    public function create_sub_category(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'  => ['required'],
            'parent' => ['required'],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        }

        $menu = new CdCategory();
        $menu->title  = $request->title;
        $menu->parent = $request->parent;
        $menu->slug = $request->slug ?? $request->title;
        
        if ($request->hasFile('image')) {
            $menu->image = $request->file('image')->store('upload/categories');
        }

        $result = $menu->save();

        if ($result) {
            return response()->json([
                "message" => "SubCategory Created Successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Something Went Wrong"
            ], 302);
        }
    }

    // Delete SubCategory
    public function delete_sub_category($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of subcategory for deleting"
            ], 302);
        }

        $menu = CdCategory::find($id);

        if (!$menu) {
            return response()->json([
                "message" => "Record not found or already deleted"
            ], 302);
        }

        if ($menu->delete()) {
            return response()->json([
                "message" => "SubCategory Deleted Successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Something went wrong!"
            ], 302);
        }
    }

    // List SubCategories
    public function show_sub_category()
    {
        $menu = CdCategory::where('parent', '!=', null)->with('parent_item')->get();
        return view('admin.particular.sub_category.index', compact('menu'));
    }

    // Update SubCategory
    public function update_sub_category(Request $request, $id)
    {
        $menu = CdCategory::find($id);

        if (!$menu) {
            return response()->json(["message" => "SubCategory not found"], 302);
        }

        $validator = Validator::make($request->all(), [
            'title'  => ['required'],
            'parent' => ['required'],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        }

        $menu->title  = $request->title;
        $menu->parent = $request->parent;
        $menu->slug   = $request->slug ?? $request->title;
        
        if ($request->hasFile('image')) {
            $menu->image = $request->file('image')->store('upload/categories');
        }

        if ($menu->save()) {
            return response()->json([
                "message" => "SubCategory Updated Successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Something went wrong"
            ], 302);
        }
    }

    // Views
    public function create_sub_category_view()
    {
        $parents = CdCategory::where('parent', null)->get();
        return view('admin.particular.sub_category.create', compact('parents'));
    }

    public function update_sub_category_view($id)
    {
        $menu = CdCategory::find($id);
        $parents = CdCategory::where('parent', null)->get();

        if ($menu) {
            return view('admin.particular.sub_category.update', compact('menu', 'parents'));
        } else {
            return redirect('/admin/sub_category');
        }
    }
}
