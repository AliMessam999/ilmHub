<?php

namespace App\Http\Controllers;

use App\Models\CdClient;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
   //
     //
     public function create_client(Request $request)
     {
         $validator = Validator::make($request->all(), [
             'title' => ['required',Rule::unique('cd_clients')],
             'sort' => 'required',
             'image' => ['required', Rule::imageFile(), 'max:500'],
             'alt' => 'required',
         ]);
 
         if ($validator->fails()) {
             return response()->json($validator->errors(), 302);
         } else {
             $path = $request->file('image')->store('upload/client');
             if (!$path) {
                 return response()->json([
                     "message" => "File not store try again!"
                 ], 302);
             }
             $client = new CdClient();
             $client->title = $request->title;
             $client->sort = $request->sort;
             $client->alt = $request->alt;
             $client->image = $path;
             $client->link = $request->link;
             $client->description = $request->description;
             $result = $client->save();
             if ($result) {
                 return response()->json([
                     "message" => "Industry Created Successfully"
                 ], 200);
             } else {
                 return response()->json([
                     "message" => "Something Went Wrong"
                 ], 302);
             }
         }
     }
 
     public function delete_client($id = null)
     {
         if (!$id) {
             return response()->json([
                 "message" => "Please enter the id of client for deleting"
             ], 302);
         }
         if (CdClient::where('id', $id)->count() > 0) {
             $CdClient = CdClient::where('id', $id)->delete();
             if ($CdClient) {
                 return response()->json([
                     "message" => "Industry Deleted Successfully"
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
     public function show_client($id = null)
     {
         $client = CdClient::get();
         return view('admin.client.index', compact('client'));
     }
     public function update_client(Request $request, $id)
     {
         if (CdClient::where('id', $id)->count() > 0) {
             if ($request->file('image')) {
                 $validator = Validator::make($request->all(), [
                     'title' => 'required',
                     'sort' => 'required',
                     'image' => ['required', Rule::imageFile(), 'max:500'],
                     'alt'=>'required'
                 ]);
                 $path = $request->file('image')->store('upload/client');
             } else {
                 $validator = Validator::make($request->all(), [
                     'title' => 'required',
                     'sort'=>'required',
                     'alt'=>'required'
                 ]);
             }
             if (CdClient::where('id', '!=', $id)->where('title','LIKE', $request->title)->count() > 0) {
                 return response()->json([
                     "message" => "The Name Has Already Been Taken"
                 ], 302);
             }
             if ($validator->fails()) {
                 return response()->json($validator->errors(), 302);
             } else {
                 if ($request->file('image')) {
                     $CdClient = CdClient::where('id', $id)->update([
                         'title' => $request->title,
                         'sort' => $request->sort,
                         'alt' => $request->alt,
                         'image' => $path,
                         'link' => $request->link,
                         'description' => $request->description,
                     ]);
                 } else {
                     $CdClient = CdClient::where('id', $id)->update([
                         'title' => $request->title,
                         'sort' => $request->sort,
                         'alt' => $request->alt,
                         'link' => $request->link,
                         'description' => $request->description,
                     ]);
                 }
                 if ($CdClient) {
                     return response()->json([
                         "message" => "Industry Updated Successfully"
                     ], 200);
                 } else {
                     return response()->json([
                         "message" => "Something went wrong"
                     ], 302);
                 }
             }
         }
     }
 
     public function create_client_view()
     {
         return view('admin.client.create');
     }
 
     public function update_client_view($id)
     {
         $menu = CdClient::where('id', $id);
         if ($menu->count() > 0) {
             $menu = $menu->first();
             return view('admin.client.update', compact('menu'));
         } else {
             return redirect('/admin/client');
         }
     }
}
