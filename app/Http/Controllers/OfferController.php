<?php

namespace App\Http\Controllers;

use App\Models\CdOffer;
use App\Models\CdCategory;
use App\Models\CdMenu;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
<?php

namespace App\Http\Controllers;

use App\Models\CdOffer;
use App\Models\CdCategory;
use App\Models\CdMenu;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
    public function create_offer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', Rule::unique('cd_offers')],
            'description' => 'required',
            'image' => ['required', Rule::imageFile(), 'max:500'],
            'alt' => 'required',
            'category_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
            
            $path = $request->file('image')->store('upload/offer');
            if(!$path){
                return response()->json([
                    "message" => "File not store try again!"
                ], 302);
            }
            
            // Generate optimized thumbnails
            ImageHelper::generateThumbnails($path);
            
            $offer = new CdOffer();
            $offer->title = $request->title;
            $offer->description = $request->description;
            $offer->category_id = $request->category_id;
            $offer->position = $request->position;
            $offer->alt = $request->alt;
            $offer->class = $request->class; // Add class field
            $offer->image = $path;
            $result = $offer->save();
            if ($result) {
                return response()->json([
                    "message" => "Offer Created Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something Went Wrong"
                ], 302);
            }
        }
    }

    public function delete_offer($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of offer for deleting"
            ], 302);
        }
        if (CdOffer::where('id', $id)->count() > 0) {
            $CdOffer = CdOffer::where('id', $id)->delete();
            if ($CdOffer) {
                return response()->json([
                    "message" => "Offer Deleted Successfully"
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
    
    public function show_offer($id = null)
    {
        $offer = CdOffer::get();
        return view('admin.offer.index', compact('offer'));
    }
    
    public function update_offer(Request $request, $id)
    {
        // dd($request->all());

        if (CdOffer::where('id', $id)->count() > 0) {
            if($request->file('image')){
                $validator = Validator::make($request->all(), [
                    'title' => ['required'],
                    'description' => 'required',
                    'image' => ['required', Rule::imageFile(), 'max:500'],
                    'alt' => 'required'
                ]);
                $path = $request->file('image')->store('upload/offer');
                
                // Generate optimized thumbnails for new image
                if ($path) {
                    ImageHelper::generateThumbnails($path);
                }
            } else {
                $validator = Validator::make($request->all(), [
                    'title' => ['required'],
                    'description' => 'required',
                    'alt' => 'required'
                ]);
            }
            
            if (CdOffer::where('id', '!=', $id)->where('title', 'LIKE', $request->title)->count() > 0) {
                return response()->json([
                    "message" => "The Name Has Already Been Taken"
                ], 302);
            }
           
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                $updateData = [
                    'title' => $request->title,
                    'description' => $request->description,
                    'alt' => $request->alt,
                    'class' => $request->class, // Add class field
                    'category_id' => $request->category_id,
                    'position' => $request->position,
                ];

                if($request->file('image')){
                    $updateData['image'] = $path;
                }

                $CdOffer = CdOffer::where('id', $id)->update($updateData);
                
                if ($CdOffer) {
                    return response()->json([
                        "message" => "Offer Updated Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something went wrong"
                    ], 302);
                }
            }
        }
    }

    public function create_offer_view()
    {
        $menues = CdMenu::with('allCategories')->get();
        return view('admin.offer.create', compact('menues'));
    }

    public function update_offer_view($id)
    {
        $categories = CdMenu::with('allCategories')->get();
        $menu = CdOffer::where('id', $id);
        
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.offer.update', compact('menu', 'categories'));
        } else {
            return redirect('/admin/offer');
        }
    }
}