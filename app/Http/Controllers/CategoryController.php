<?php

namespace App\Http\Controllers;

use App\Models\CdCategory;
use App\Models\CdMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    // Show create category view
    public function create_category_view()
    {
        $menus = CdMenu::get();
        return view('admin.particular.category.create', compact('menus'));
    }

    // Handle category creation
    public function create_category(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        }

        $category = new CdCategory();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->menu_id = $request->menu_id;
        $category->parent = $request->parent;

        // Slug handling (store as provided)
        $category->slug = $request->slug ?? $request->title;

        $result = $category->save();

        if ($result) {
            return response()->json(["message" => "Category Created Successfully"], 200);
        }

        return response()->json(["message" => "Something Went Wrong"], 302);
    }

    // Show list of categories
    public function show_category($id = null)
    {
        $menu = CdCategory::where('parent', null)->with('menu')->get();
        return view('admin.particular.category.index', compact('menu'));
    }

    // Show update category view
    public function update_category_view($id)
    {
        $category = CdCategory::where('id', $id)->with('menu')->first();
        $menuItems = CdMenu::get();

        if ($category) {
            return view('admin.particular.category.update', compact('category', 'menuItems'));
        } else {
            return redirect('/admin/category');
        }
    }

    // Handle category update
    public function update_category(Request $request, $id)
    {
        $category = CdCategory::find($id);

        if (!$category) {
            return response()->json(["message" => "Category not found"], 302);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        }

        $category->title = $request->title;
        $category->description = $request->description;
        $category->menu_id = $request->menu_id;
        $category->parent = $request->parent;

        // Slug handling (store as provided)
        $category->slug = $request->slug ?? $request->title;

        $result = $category->save();

        if ($result) {
            return response()->json(["message" => "Category Updated Successfully"], 200);
        }

        return response()->json(["message" => "Something Went Wrong"], 302);
    }

    // Handle category deletion
    public function delete_category($id = null)
    {
        if (!$id) {
            return response()->json(["message" => "Please enter the id of category for deleting"], 302);
        }

        $category = CdCategory::find($id);

        if (!$category) {
            return response()->json(["message" => "Record not found or already deleted"], 302);
        }

        if ($category->delete()) {
            return response()->json(["message" => "Category Deleted Successfully"], 200);
        }

        return response()->json(["message" => "Something went wrong"], 302);
    }
}
