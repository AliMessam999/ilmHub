<?php

namespace App\Http\Controllers;

use App\Models\CdFaq;
use App\Models\CdCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    public function create_faq(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', Rule::unique('cd_faqs')],
            'description' => 'required',
            
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {

            $career = new CdFaq();
            $career->title = $request->title;
            $career->sub_category_id = $request->sub_category_id;
            $career->description = $request->description;
            $result = $career->save();
            if ($result) {
                return response()->json([
                    "message" => "FAQ Created Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something Went Wrong"
                ], 302);
            }
        }
    }

    public function delete_faq($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of Feature for deleting"
            ], 302);
        }
        if (CdFaq::where('id', $id)->count() > 0) {
            $CdFaq = CdFaq::where('id', $id)->delete();
            if ($CdFaq) {
                return response()->json([
                    "message" => "FAQ Deleted Successfully"
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
    public function show_faq($id = null)
    {
        $menu = CdFaq::get();
        return view('admin.home.faq.index', compact('menu'));
    }
    public function update_faq(Request $request, $id)
    {
        if (CdFaq::where('id', $id)->count() > 0) {

                $validator = Validator::make($request->all(), [
                    'title' => ['required',],
                            'description' => 'required',
                        ]);
            if (CdFaq::where('id', '!=', $id)->where('title', 'LIKE', $request->title)->count() > 0) {
                return response()->json([
                    "message" => "The Name Has Already Been Taken"
                ], 302);
            }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                    $menu = CdFaq::where('id', $id)->update([
                        'title' => $request->title,
                        'sub_category_id' => $request->sub_category_id,
                        'description' => $request->description,
                    ]);
                if ($menu) {
                    return response()->json([
                        "message" => "FAQ Updated Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something went wrong"
                    ], 302);
                }
            }
        }
    }

    public function create_faq_view()
    {
        $data['categories'] = CdCategory::where('parent','!=',NULL)->get();
        return view('admin.home.faq.create', $data);
    }

    public function update_faq_view($id)
    {
        $data['categories'] = CdCategory::where('parent','!=',NULL)->get();

        $menu = CdFaq::where('id', $id);
        if ($menu->count() > 0) {
            $data['menu'] = $menu->first();
            return view('admin.home.faq.update', $data);
        } else {
            return redirect('/admin/faq');
        }
    }
}
