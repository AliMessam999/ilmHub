<?php

namespace App\Http\Controllers;

use App\Models\CdCategory;
use App\Models\CdMenu;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function create_category(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', Rule::unique('cd_categories')],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
                $menu = new CdCategory();
                $menu->title = $request->title;
                $menu->description = $request->description;
                $menu->menu_id = $request->menu_id;
                $menu->parent = $request->parent;
                $result = $menu->save();
                if ($result) {
                    return response()->json([
                        "message" => "Category Created Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something Went Wrong"
                    ], 302);
                }
        }
    }

    public function delete_category($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of category for deleting"
            ], 302);
        }
        if (CdCategory::where('id', $id)->count() > 0) {
            $CdCategory = CdCategory::where('id', $id)->delete();
            if ($CdCategory) {
                return response()->json([
                    "message" => "Category Deleted Successfully"
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
    public function show_category($id = null)
    {
        $menu = CdCategory::where('parent',NULL)->with('menu')->get();
        return view('admin.particular.category.index', compact('menu'));
    }
    public function update_category(Request $request, $id)
    {
        if (CdCategory::where('id', $id)->count() > 0) {
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                ]);
            if (CdCategory::where('id', '!=', $id)->where('title', 'LIKE', $request->title)->count() > 0) {
                return response()->json([
                    "message" => "The name Has Already Been Taken"
                ], 302);
            }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                        $CdCategory = CdCategory::where('id', $id)->update([
                            'title' => $request->title,
                            'description' => $request->description,
                            'menu_id' => $request->menu_id,
                            'parent' => $request->parent,
                        ]);
                        if ($CdCategory) {
                            return response()->json([
                                "message" => "Category Updated Successfully"
                            ], 200);
                        } else {
                            return response()->json([
                                "message" => "Something went wrong"
                            ], 302);
                        }
                    }
            }
    }

    public function create_category_view()
    {
        $menus = CdMenu::get();
        return view('admin.particular.category.create', compact('menus'));
    }

    public function update_category_view($id)
    {
        $menu = CdCategory::where('id', $id)->with('menu')->get();
        $menuItems = CdMenu::get();
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.particular.category.update', compact('menu','menuItems'));
        } else {
            return redirect('/admin/category');
        }
    }
}
