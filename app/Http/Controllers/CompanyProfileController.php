<?php

namespace App\Http\Controllers;

use App\Models\CdProfile;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class CompanyProfileController extends Controller
{
    //
    // public function create_company_profile(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'email' => ['required'],
    //         'facebook_link' => 'required',
    //         'address' => 'required',
    //         'location' => 'required',
    //         'youtube_link' => 'required',
    //         'google_link' => 'required',
    //         'instagram_link' => 'required',
    //         'twitter_link' => 'required',
    //         'open_days' => 'required',
    //         'open_time' => 'required',
    //         'contact' => 'required',
    //         'contact_2' => 'required',
    //         'email_2' => ['required'],
    //         'address_2' => 'required',
    //         'fax' => 'required',
    //         'description' => 'required',
    //         'image' => ['required',Rule::imageFile(),'max:500'],
    //         'alt'=>'required',   
    //         'large_logo' => ['nullable',Rule::imageFile(),'max:500'],
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json($validator->errors(), 302);
    //     } 
    //     // if(CdProfile::all()->count())
    //         $path = $request->file('image')->store('upload/company_profile');
    //         $large_logo_path = $request->file('large_logo')->store('upload/company_profile');
    //         if(isset($request->profile_id) && !empty($request->profile_id)){
    //             $profile = $request->input();
    //             Arr::pull($profile,'_token');
    //             Arr::pull($profile,'profile_id');
    //             $profile['image']=$path;
    //             $profile['large_logo']=$large_logo_path;
    //             $update = CdProfile::where("id",$request->profile_id)->update($profile); 
    //         }
    //         else{
    //         $profile = $request->input();
    //         Arr::pull($profile,'_token');
    //         $profile['image']=$path;
    //         $profile['large_logo']=$large_logo_path;
    //         $update = CdProfile::create($profile);
    //         }
    //         if ($update) {
    //             return response()->json([
    //                 "message" => "Company Profile Created or Updated Successfully"
    //             ], 200);
    //         } else {
    //             return response()->json([
    //                 "message" => "Something Went Wrong"
    //             ], 302);
    //         }
    // }


    public function create_company_profile(Request $request)
{
    $rules = [
        'email' => ['required'],
        'facebook_link' => 'required',
        'address' => 'required',
        'location' => 'required',
        'youtube_link' => 'required',
        'google_link' => 'required',
        'instagram_link' => 'required',
        'twitter_link' => 'required',
        'open_days' => 'required',
        'open_time' => 'required',
        'contact' => 'required',
        'contact_2' => 'required',
        'email_2' => ['required'],
        'address_2' => 'required',
        'fax' => 'required',
        'description' => 'required',
        'alt' => 'required',
        'large_logo' => ['nullable', Rule::imageFile(), 'max:500'],
    ];

    // Create ke time image required
    if (!$request->profile_id) {
        $rules['image'] = ['required', Rule::imageFile(), 'max:500'];
    } else {
        // Update ke time optional
        $rules['image'] = ['nullable', Rule::imageFile(), 'max:500'];
    }

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 302);
    }

    // Create or Update Object
    if ($request->profile_id) {
        $profile = CdProfile::find($request->profile_id);
    } else {
        $profile = new CdProfile();
    }

    // Fill basic fields
    $data = $request->except(['_token', 'profile_id', 'image', 'large_logo']);

    // If new image uploaded
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('upload/company_profile');
    } else if ($request->profile_id) {
        $data['image'] = $profile->image; // old image
    }

    // If new large_logo uploaded
    if ($request->hasFile('large_logo')) {
        $data['large_logo'] = $request->file('large_logo')->store('upload/company_profile');
    } else if ($request->profile_id) {
        $data['large_logo'] = $profile->large_logo; // old logo
    }

    $profile->fill($data);
    $profile->save();

    return response()->json([
        "message" => "Company Profile Created or Updated Successfully"
    ], 200);
}


    public function create_profile_view()
    {
        $item = CdProfile::first();
        return view('admin.profile.create', compact('item'));
    }
}
