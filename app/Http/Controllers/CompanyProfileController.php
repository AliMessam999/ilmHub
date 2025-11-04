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
    public function create_company_profile(Request $request)
    {
        $validator = Validator::make($request->all(), [
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
            'image' => ['required',Rule::imageFile(),'max:500'],
            'alt'=>'required'    
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } 
        // if(CdProfile::all()->count())
            $path = $request->file('image')->store('upload/company_profile');
            if(isset($request->profile_id) && !empty($request->profile_id)){
                $profile = $request->input();
                Arr::pull($profile,'_token');
                Arr::pull($profile,'profile_id');
                $profile['image']=$path;
                $update = CdProfile::where("id",$request->profile_id)->update($profile); 
            }
            else{
            $profile = $request->input();
            Arr::pull($profile,'_token');
            $profile['image']=$path;
            $update = CdProfile::create($profile);
            }
            if ($update) {
                return response()->json([
                    "message" => "Company Profile Created or Updated Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something Went Wrong"
                ], 302);
            }
    }

    public function create_profile_view()
    {
        $item = CdProfile::first();
        return view('admin.profile.create', compact('item'));
    }
}
