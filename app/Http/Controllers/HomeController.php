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
        $data->partners = CdPartner::OrderBy('order', 'asc')->get();
        $data->client = CdClient::OrderBy('sort', 'asc')->get();
        // dd($data->client);

        // New Data
        $data->caseStudies = CdFeature::with('images')
            ->whereIn('id', [50, 43, 48])
            ->orderByRaw("FIELD(id, 50, 43, 48)")
            ->get();
        // $data->caseStudies = CdFeature::get(); 
        // dd($data->caseStudies);     
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
            return $query->where('title','LIKE','Leadership & Team');
        })->get();
        // dd($certificates);
        $registrations =  CdOffer::where('position','bottom')->whereHas('Category',function($query){
            return $query->where('title','LIKE','Leadership & Team');
        })->get();
        // dd($registrations);
        
        $expertise = CdOffer::where('position','top')->whereHas('Category',function($query){
            return $query->where('title', 'Company Overview');
        })->get();

        $about_us = CdOffer::where('position','bottom')->whereHas('Category',function($query){
            return $query->where('title', 'Company Overview');
        })->get();

        $about_page_title = CdOffer::where('position', 'bottom')
            ->where('alt', 'about_page_title')
            ->value('title');

        // Split into words
        $words = explode(' ', $about_page_title);

        // Get all words except last one
        $title_except_last_word = implode(' ', array_slice($words, 0, -1));

        // Get only the last word
        $last_word = end($words);

        $skills = CdSkill::where('position', 'progress_bar')->get();

        return view('frontend.about_us', compact('profile', 'services', 'team','certificates',
            'registrations', 'expertise', 'about_us', 'skills', 'title_except_last_word', 'last_word'));
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
        return view('frontend.contact', compact('contact'));
    }
    public function contactus(Request $request)
    {
        $hostname = gethostname();
        $localIpAddress = gethostbyname($hostname);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', Rule::unique('cd_contacts')],
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $errorMessage = $errors->first();
            return response()->json(['message' => $errorMessage], 302);
        }

        if (CdContact::where('ip', $localIpAddress)->whereNull('deleted_at')->count() > 0) {
            return response()->json([
                'message' => 'You have already sent a message. Please wait for the reply.'
            ], 302);
        }

        $contact = new CdContact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->ip = $localIpAddress;
        if ($contact->save()) {
            $confirmationToken = 'CD' . str_pad($contact->id, 6, '0', STR_PAD_LEFT);
            $redirectUrl = $request->input('redirect_to') === 'home' ? route('home') : null;
            return response()->json([
                'message' => 'Thanks for contacting us. Please wait for the reply.',
                // 'confirmation_token' => $confirmationToken,
                'redirect' => $redirectUrl
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
        $category = CdCategory::where('parent', NULL)->whereHas('menu',function($query){
            return  $query->where('title','LIKE','%divisions%');
        })->withCount('news')->get();
        // dd($category);die;
        return view('frontend.blogs', compact('news', 'category'));
    }

    public function newsDetailPage($title)
    {
        $new = CdNew::where('title', 'LIKE', '%' . $title . '%')->with('category')->first();
        $recent = CdNew::where('category_id', $new->category_id)->where('id', '!=', $new->id)->orderBy('created_at', 'desc')->limit(3)->get();
        $category = CdCategory::where('parent', NULL)->whereIn('title', ['Divisions'])->get();
        // dd($category);
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
    public function caseStudiesPage()
    {
        $caseStudies = CdFeature::with('images')->paginate(15);
        return view('frontend/case-studies', compact('caseStudies'));
    }

    public function caseStudyDetailPage($title)
    {
        $caseStudy = CdFeature::where('title', 'LIKE', '%' . $title . '%')->with('images')->first();
        
        // if (!$caseStudy) {
        //     abort(404, 'Case study not found');
        // }
        
        $recent = CdFeature::where('id', '!=', $caseStudy->id)->orderBy('created_at', 'desc')->limit(3)->get();
        // Next post (newer one in same category)
        $next = CdFeature::where('id', '>', $caseStudy->id)
            ->orderBy('id', 'asc')
            ->first();

        // Previous post (older one in same category)
        $previous = CdFeature::where('id', '<', $caseStudy->id)
            ->orderBy('id', 'desc')
            ->first();
        
        return view('frontend/case-study-detail', compact('caseStudy', 'recent','previous','next'));
    }

    public function divsions($category_id = null)
    {
        $category = CdCategory::where('slug','LIKE','%'.$category_id.'%')->with('sub_categories.solutions')->first();
        // dd($category);
        if (!$category) {
            abort(403, 'Category not found');
        }
        
        if (stripos($category->title, 'industries') !== false) {
            abort(500);
        }

        $caseStudies = CdFeature::whereHas('category',function($query) use ($category){
            return $query->where('parent',$category->id);
        })->with('images')->paginate(15);
        
        if ($caseStudies->isEmpty() && $category->sub_categories->isEmpty()) {
            return view('frontend.coming-soon', compact('category'));
        }
        
        return view('frontend.divisions',compact('category','caseStudies'));
    }

    public function subDivsions($category_id = null)
    {
        $data['solution'] = CdSolution::whereHas('category',function($query) use ($category_id){
            return $query->where('slug','LIKE','%'.$category_id.'%');
        })->with('category')->first();
        $data['sub_division']= CdCategory::where('slug','LIKE','%'.$category_id.'%')->with('parent_item')->first();
        
        if (!$data['sub_division']) {
            abort(404, 'Sub-division not found');
        }
        
        if (!$data['solution']) {
            return view('frontend.coming-soon', ['category' => $data['sub_division']]);
        }
        
        $data['categories'] = CdCategory::where('parent',$data['sub_division']->parent_item->id)->get();
        $data['slug'] = '/sub-divisions/'.$category_id;
       return view('frontend.sub-divisions',$data);
    }
}
