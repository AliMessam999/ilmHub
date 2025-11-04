<?php

namespace App\Http\Controllers;

use App\Models\CdCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    public function create_sub_category(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', Rule::unique('cd_categories')],
            'parent' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
                $menu = new CdCategory();
                $menu->title = $request->title;
                $menu->parent = $request->parent;
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
    }

    public function delete_sub_category($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of subcategory for deleting"
            ], 302);
        }
        if (CdCategory::where('id', $id)->count() > 0) {
            $CdCategory = CdCategory::where('id', $id)->delete();
            if ($CdCategory) {
            //     $submenu = Submenu::where('menu_id', $id)->update([
            //         'status' => 'delete'
            //     ]);
            //     // $products = Product::where('menu_id', $id)->update([
            //     //     'status' => 'delete'
            //     // ]);
                return response()->json([
                    "message" => "SubCategory Deleted Successfully"
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
    public function show_sub_category($id = null)
    {
        $menu = CdCategory::where('parent','!=',NULL)->with('parent_item')->get();
        return view('admin.particular.sub_category.index', compact('menu'));
    }
    public function update_sub_category(Request $request, $id)
    {
        if (CdCategory::where('id', $id)->count() > 0) {
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'parent' => 'required',
                ]);
            // if (CdCategory::where('id', '!=', $id)->where('title', 'LIKE', $request->title)->count() > 0) {
            //     return response()->json([
            //         "message" => "The Name Has Already Been Taken"
            //     ], 302);
            // }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                        $CdCategory = CdCategory::where('id', $id)->update([
                            'title' => $request->title,
                            'parent' => $request->parent,
                        ]);
                        if ($CdCategory) {
                            return response()->json([
                                "message" => "SubCategory Updated Successfully"
                            ], 200);
                        } else {
                            return response()->json([
                                "message" => "Something went wrong"
                            ], 302);
                        }
                    }
            }
    }

    public function create_sub_category_view()
    {
        $parents = CdCategory::where('parent',NULL)->get();
        return view('admin.particular.sub_category.create', compact('parents'));
    }

    public function update_sub_category_view($id)
    {
        $menu = CdCategory::where('id', $id);
        $parents = CdCategory::where('parent',NULL)->get();
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.particular.sub_category.update', compact('menu','parents'));
        } else {
            return redirect('/admin/sub_category');
        }
    }
}
