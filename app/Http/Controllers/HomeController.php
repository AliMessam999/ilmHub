<?php

namespace App\Http\Controllers;

use App\Models\CdNew;
use App\Models\CdOffer;
use App\Models\CdSkill;
use App\Models\CdCareer;
use App\Models\CdClient;
use App\Models\CdPolicy;
use App\Models\CdSlider;
use App\Models\CdContact;
use App\Models\CdFeature;
use App\Models\CdGallary;
use App\Models\CdPartner;
use App\Models\CdProfile;
use App\Models\CdCategory;
use App\Models\CdSolution;
use App\Models\CdCoreValue;
use App\Models\CdTeamMember;
use Illuminate\Http\Request;
use App\Models\CdTermCondition;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function getData()
    {
        $data = new \stdClass;
        $data->slider = CdSlider::all();
        $data->feature = CdFeature::all();
        $data->category = CdCategory::whereHas('menu', function ($query) {
            return $query->where('title', 'LIKE', '%solutions%');
        })->with('sub_categories.solutions')->get();
        // dd($data->category);
        $data->aboutus = CdCoreValue::first();
        $data->skills = CdSkill::get();
        $data->offer = CdOffer::first();
        $data->partners = CdPartner::OrderBy('sort', 'asc')->get();
        $data->client = CdClient::OrderBy('sort', 'asc')->get();
        // dd($data->client);

        // New Data
        $data->blogs = CdNew::inRandomOrder()->with('category')->get();

        // dd($data->blogs);
        // foreach ($data->blogs as $blog) {
        //     // Access your single random blog item
        //     // dd($blog);
        //     // dd($blog->category->title);
        //     // dd($blog->date);
        //     // dd($blog->date);
        //     // dd($blog->alt);
        //     // dd($blog->image);
        //     // dd($blog->description);
        //     // dd($blog->title);
        // }        
        return view('frontend.home', compact('data'));
    }
    public function IndustryData()
    {
        $data['industries'] = CdClient::all();
        return view('frontend.industries', $data);
    }
     public function IndustryDetails($title)
    {
        // dd($title);
        $data['industriesDetails']=CdClient::where('title', $title)->first();
        //  dd($data['industriesDetails']);
        $data['insightsupdates'] = CdNew::inRandomOrder()->limit(3)->get();
        return view('frontend.industries-details', $data);
    }
  

    public function SolutionPage($id = null)
    {
        $categories = CdCategory::whereHas('menu', function ($query) {
            return $query->where('title', 'LIKE', '%solutions%');
        })->with('sub_categories.solutions')->get();
        if ($id) {
            $count =  CdCategory::whereDoesntHave('sub_categories.solutions')->where('id', $id)
                ->count();
            if ($count > 0) {
                return redirect('solutions');
            }
        }
        return view('solutions', compact('categories', 'id'));
    }

    public function ProjectDetailsPage($title)
    {
        $solution = CdSolution::wherehas('category', function ($query) use ($title) {
            return $query->where('title', 'Like', '%' . $title . '%');
        })->with('category', 'category.parent_item')->first();
        $recent = CdSolution::distinct('category_id')->with('category')->orderBy('created_at', 'desc')->limit(3)->get();
        $category = CdCategory::where('parent', NULL)->whereNotIn('title', ['Clients', 'Partners', 'Contact'])->get();
        return view('solution_details', compact('solution', 'recent', 'category'));
    }

    public function servicesPage()
    {
        $solutions = CdSolution::with('category', 'category.parent_item')->get();

        $data_feature = CdFeature::all();
        return view('services', compact('data_feature', 'solutions'));
    }

    public function serviceDetailsPage($title)
    {
        $solution = CdFeature::where('title', 'Like', '%' . $title . '%')->first();
        $recent = CdSolution::distinct('category_id')->with('category')->orderBy('created_at', 'desc')->limit(3)->get();
        $category = CdCategory::where('parent', NULL)->whereNotIn('title', ['Clients', 'Partners', 'Contact'])->get();
        // dd($solution);
        return view('service_details', compact('solution', 'recent', 'category'));
    }

    public function galleryPage()
    {
        $gallery = CdGallary::OrderBy('created_at', 'desc')->get();
        return view('frontend.gallery', compact('gallery'));
    }
    public function careersPage($title = null)
    {
        if ($title) {
            $career = CdCareer::where('title', 'LIKE', '%' . $title . '%')->first();
            $recent = CdCareer::OrderBy('created_at', 'desc')->limit(5)->get();
             // Next post (newer one in same category)
        $next = CdCareer::
            where('id', '>', $career->id)
            ->orderBy('id', 'asc')
            ->first();

        // Previous post (older one in same category)
        $previous = CdCareer::
            where('id', '<', $career->id)
            ->orderBy('id', 'desc')
            ->first();
            return view('frontend.career-details', compact('career', 'recent','next','previous'));
        }
        $careers = CdCareer::whereDate('last_date_to_apply', '>=', now())->get();
        return view('frontend.careers', compact('careers'));
    }

    public function aboutusPage()
    {
        $profile = CdProfile::first();
        $services = CdFeature::Orderby('created_at', 'desc')->limit(3)->get();
        $team = CdTeamMember::all();
        // dd($team);
         $certificates = CdOffer::where('position','top')->whereHas('Category',function($query){
            return $query->where('title','LIKE','Certifications & Registrations');
        })->get();
        $registrations =  CdOffer::where('position','bottom')->whereHas('Category',function($query){
            return $query->where('title','LIKE','Certifications & Registrations');
        })->get();
        return view('frontend.about_us', compact('profile', 'services', 'team','certificates','registrations'));
    }

    public function clientsPage()
    {
        $client = CdClient::all();
        return view('clients', compact('client'));
    }
    public function partnersPage()
    {
        $partners = CdPartner::all();
        return view('partners', compact('partners'));
    }

    public function contactPage()
    {
        $contact = CdProfile::first();
        return view('contact', compact('contact'));
    }
    public function contactus(Request $request)
    {
        $hostname = gethostname();
        $localIpAddress = gethostbyname($hostname);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', Rule::unique('cd_contacts')],
            'phone_no' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        }

        if (CdContact::where('ip', $localIpAddress)->count() > 0) {
            return response()->json([
                'message' => 'You have already sent a message. Please wait for the reply.'
            ], 302);
        }

        $contact = new CdContact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone_no;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->ip = $localIpAddress;
        if ($contact->save()) {
            return response()->json([
                'message' => 'Thanks for contact us. Please wait for the reply.'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Data not saved. Please wait.'
            ], 302);
        }
    }

    public function newsPage(Request $request)
    {
        if ($request->has('search')) {
            $news = CdNew::filter(request(['search']))->with('category')->orderBy('created_at', 'desc')->get();
        } else {
            $news = CdNew::with('category')->orderBy('created_at', 'desc')->get();
        }
        $category = CdCategory::where('parent', NULL)->whereNotIn('title', ['Clients', 'Partners', 'Contact'])->withCount('news')->get();
        return view('frontend.blogs', compact('news', 'category'));
    }

    public function newsDetailPage($title)
    {
        $new = CdNew::where('title', 'LIKE', '%' . $title . '%')->with('category')->first();
        $recent = CdNew::where('category_id', $new->category_id)->where('id', '!=', $new->id)->orderBy('created_at', 'desc')->limit(3)->get();
        $category = CdCategory::where('parent', NULL)->whereNotIn('title', ['Clients', 'Partners', 'Contact'])->get();
        // Next post (newer one in same category)
        $next = CdNew::where('category_id', $new->category_id)
            ->where('id', '>', $new->id)
            ->orderBy('id', 'asc')
            ->first();

        // Previous post (older one in same category)
        $previous = CdNew::where('category_id', $new->category_id)
            ->where('id', '<', $new->id)
            ->orderBy('id', 'desc')
            ->first();

        return view('frontend.blogs-details', compact('new', 'recent', 'category', 'next', 'previous'));
    }

    public function policyPage()
    {
        $policy = CdPolicy::first();
        return view('policy', compact('policy'));
    }

    public function termsconditionPage()
    {
        $terms = CdTermCondition::first();
        return view('terms_conditions', compact('terms'));
    }
}
