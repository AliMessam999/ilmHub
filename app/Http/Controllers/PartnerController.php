<?php

namespace App\Http\Controllers;

use App\Models\CdPartner;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    public function create_partner(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required',Rule::unique('cd_partners')],
            'sort' => 'required',
            'image' => ['required', Rule::imageFile(), 'max:500'],
            'alt' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
            $path = $request->file('image')->store('upload/partner');
            if (!$path) {
                return response()->json([
                    "message" => "File not store try again!"
                ], 302);
            }
            $partner = new CdPartner();
            $partner->title = $request->title;
            $partner->sort = $request->sort;
            $partner->alt = $request->alt;
            $partner->image = $path;
            $partner->link = $request->link;
            $result = $partner->save();
            if ($result) {
                return response()->json([
                    "message" => "Partner Created Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something Went Wrong"
                ], 302);
            }
        }
    }

    public function delete_partner($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of partner for deleting"
            ], 302);
        }
        if (CdPartner::where('id', $id)->count() > 0) {
            $CdPartner = CdPartner::where('id', $id)->delete();
            if ($CdPartner) {
                return response()->json([
                    "message" => "Partner Deleted Successfully"
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
    public function show_partner($id = null)
    {
        $partner = CdPartner::get();
        return view('admin.partner.index', compact('partner'));
    }
    public function update_partner(Request $request, $id)
    {
        if (CdPartner::where('id', $id)->count() > 0) {
            if ($request->file('image')) {
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'sort' => 'required',
                    'image' => ['required', Rule::imageFile(), 'max:500'],
                    'alt'=>'required'
                ]);
                $path = $request->file('image')->store('upload/partner');
            } else {
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'sort'=>'required',
                    'alt'=>'required'
                ]);
            }
            if (CdPartner::where('id', '!=', $id)->where('title','LIKE', $request->title)->count() > 0) {
                return response()->json([
                    "message" => "The Name Has Already Been Taken"
                ], 302);
            }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                if ($request->file('image')) {
                    $CdPartner = CdPartner::where('id', $id)->update([
                        'title' => $request->title,
                        'sort' => $request->sort,
                        'alt' => $request->alt,
                        'image' => $path,
                    ]);
                } else {
                    $CdPartner = CdPartner::where('id', $id)->update([
                        'title' => $request->title,
                        'sort' => $request->sort,
                        'alt' => $request->alt,
                    ]);
                }
                if ($CdPartner) {
                    return response()->json([
                        "message" => "Partner Updated Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something went wrong"
                    ], 302);
                }
            }
        }
    }

    public function create_partner_view()
    {
        return view('admin.partner.create');
    }

    public function update_partner_view($id)
    {
        $menu = CdPartner::where('id', $id);
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.partner.update', compact('menu'));
        } else {
            return redirect('/admin/partner');
        }
    }
}
