<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeaturedController;
use App\Http\Controllers\CoreValueController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TermConditionController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HomeController::class, 'getData'])->name('home');
Route::get('/', [HomeController::class, 'getData'])->name('home');
Route::get('/solutions', [HomeController::class, 'SolutionPage']);
Route::get('/solutions/{id}', [HomeController::class, 'SolutionPage']);
Route::get('/project/details/{title}', [HomeController::class, 'ProjectDetailsPage']);
Route::get('/industry',[HomeController::class,'IndustryData'])->name('industry.data');
Route::get('/services', [HomeController::class, 'servicesPage']);
Route::get('/service/details/{title}', [HomeController::class, 'serviceDetailsPage']);
Route::get('/gallery', [HomeController::class, 'galleryPage']);
Route::get('/careers', [HomeController::class, 'careersPage']);
Route::get('/careers/{title}', [HomeController::class, 'careersPage']);
Route::get('/about_us', [HomeController::class, 'aboutusPage']);
Route::get('/about', [HomeController::class, 'aboutusPage']);
Route::get('/clients', [HomeController::class, 'clientsPage']);
Route::get('/partners', [HomeController::class, 'partnersPage']);
Route::get('/contact', [HomeController::class, 'contactPage'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactus'])->name('contact.store');
Route::get('/blogs', [HomeController::class, 'newsPage']);
Route::get('/news/details/{title}', [HomeController::class, 'newsDetailPage']);
Route::get('/policies', [HomeController::class, 'policyPage'])->name('policies.page');
Route::get('/terms_conditions', [HomeController::class, 'termsconditionPage'])->name('terms.page');
Route::get('/case-studies', [HomeController::class, 'caseStudiesPage'])->name('case-studies.page');
Route::get('/case-study/{title}', [HomeController::class, 'caseStudyDetailPage'])->name('case-study-detail.page');
Route::get('/divisions/{category}', [HomeController::class, 'divsions'])->name('divisions.page');
Route::get('/sub-divisions/{category}', [HomeController::class, 'subDivsions'])->name('sub-divisions.page');

Route::get('/industry-detail/{title}',[HomeController::class,'IndustryDetails'])->name('industries.details');
// Route::get('/insights-updates',[HomeController::class,'Insightsupdates'])->name('insightsupdates.blogs');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['authwithadmin', 'verified'])->name('dashboard');

Route::middleware('authwithadmin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('authwithadmin')->controller(HeaderController::class)->group(function () {
    Route::get('/admin/header', 'show_header')->name('header_list');
    Route::get('/admin/header/create', 'create_header_view');
    Route::get('/admin/header/update/{id}', 'update_header_view');
    Route::post('/admin/header/create', 'create_header');
    Route::post('/admin/header/update/{id}', 'update_header');
    Route::delete('/admin/header/delete/{id}','delete_header');
});
Route::middleware('authwithadmin')->controller(RoleController::class)->group(function () {
    Route::get('/admin/role', 'show_role')->name('role_list');
    Route::get('/admin/role/create', 'create_role_view');
    Route::get('/admin/role/update/{id}', 'update_role_view');
    Route::post('/admin/role/create', 'create_role');
    Route::post('/admin/role/update/{id}', 'update_role');
    Route::delete('/admin/role/delete/{id}','delete_role');
});

Route::middleware('authwithadmin')->controller(CareerController::class)->group(function () {
    Route::get('/admin/career', 'show_career')->name('career_list');
    Route::get('/admin/career/create', 'create_career_view');
    Route::get('/admin/career/update/{id}', 'update_career_view');
    Route::post('/admin/career/create', 'create_career');
    Route::post('/admin/career/update/{id}', 'update_career');
    Route::delete('/admin/career/delete/{id}','delete_career');
});
Route::middleware('authwithadmin')->controller(CategoryController::class)->group(function () {
    Route::get('/admin/category', 'show_category')->name('category_list');
    Route::get('/admin/category/create', 'create_category_view');
    Route::get('/admin/category/update/{id}', 'update_category_view');
    Route::post('/admin/category/create', 'create_category');
    Route::post('/admin/category/update/{id}', 'update_category');
    Route::delete('/admin/category/delete/{id}','delete_category');
});
Route::middleware('authwithadmin')->controller(SubCategoryController::class)->group(function () {
    Route::get('/admin/sub_category', 'show_sub_category')->name('sub_category_list');
    Route::get('/admin/sub_category/create', 'create_sub_category_view');
    Route::get('/admin/sub_category/update/{id}', 'update_sub_category_view');
    Route::post('/admin/sub_category/create', 'create_sub_category');
    Route::post('/admin/sub_category/update/{id}', 'update_sub_category');
    Route::delete('/admin/sub_category/delete/{id}','delete_sub_category');
});
Route::middleware('authwithadmin')->controller(SliderController::class)->group(function () {
    Route::get('/admin/slider', 'show_slider')->name('slider_list');
    Route::get('/admin/slider/create', 'create_slider_view');
    Route::get('/admin/slider/update/{id}', 'update_slider_view');
    Route::post('/admin/slider/create', 'create_slider');
    Route::post('/admin/slider/update/{id}', 'update_slider');
    Route::delete('/admin/slider/delete/{id}','delete_slider');
});
Route::middleware('authwithadmin')->controller(FeaturedController::class)->group(function () {
    Route::get('/admin/featured', 'show_featured')->name('featured_list');
    Route::get('/admin/featured/create', 'create_featured_view');
    Route::get('/admin/featured/update/{id}', 'update_featured_view');
    Route::post('/admin/featured/create', 'create_featured');
    Route::post('/admin/featured/update/{id}', 'update_featured');
    Route::delete('/admin/featured/delete/{id}','delete_featured');
});
Route::middleware('authwithadmin')->controller(FaqController::class)->group(function () {
    Route::get('/admin/faq', 'show_faq')->name('faq_list');
    Route::get('/admin/faq/create', 'create_faq_view');
    Route::get('/admin/faq/update/{id}', 'update_faq_view');
    Route::post('/admin/faq/create', 'create_faq');
    Route::post('/admin/faq/update/{id}', 'update_faq');
    Route::delete('/admin/faq/delete/{id}','delete_faq');
});
Route::middleware('authwithadmin')->controller(CoreValueController::class)->group(function () {
    Route::get('/admin/core_value', 'show_core_value')->name('core_value_list');
    Route::get('/admin/core_value/create', 'create_core_value_view');
    Route::get('/admin/core_value/update/{id}', 'update_core_value_view');
    Route::post('/admin/core_value/create', 'create_core_value');
    Route::post('/admin/core_value/update/{id}', 'update_core_value');
    Route::delete('/admin/core_value/delete/{id}','delete_core_value');
});
Route::middleware('authwithadmin')->controller(GallaryController::class)->group(function () {
    Route::get('/admin/gallary', 'show_gallary')->name('gallary_list');
    Route::get('/admin/gallary/create', 'create_gallary_view');
    Route::get('/admin/gallary/update/{id}', 'update_gallary_view');
    Route::post('/admin/gallary/create', 'create_gallary');
    Route::post('/admin/gallary/update/{id}', 'update_gallary');
    Route::delete('/admin/gallary/delete/{id}','delete_gallary');
});

Route::middleware('authwithadmin')->controller(FooterController::class)->group(function () {
    Route::get('/admin/footer', 'show_footer')->name('footer_list');
    Route::get('/admin/footer/create', 'create_footer_view');
    Route::post('/admin/footer/create', 'create_footer');
    Route::delete('/admin/footer/delete/{id}','delete_footer')->name('footer.delete');
    Route::get('/admin/footer/update/{id}', 'update_footer_view')->name('footer.update');
    Route::post('/admin/footer/update/{id}', 'update_footer')->name('footer.update.post');
});


Route::middleware('authwithadmin')->controller(PolicyController::class)->group(function () {
    Route::get('/admin/policy', 'show_policy')->name('policy_list');
    Route::get('/admin/policy/create', 'create_policy_view');
    Route::get('/admin/policy/update/{id}', 'update_policy_view');
    Route::post('/admin/policy/create', 'create_policy');
    Route::post('/admin/policy/update/{id}', 'update_policy');
    Route::delete('/admin/policy/delete/{id}','delete_policy');
});
Route::middleware('authwithadmin')->controller(TeamMemberController::class)->group(function () {
    Route::get('/admin/team_member', 'show_team_member')->name('team_member_list');
    Route::get('/admin/team_member/create', 'create_team_member_view');
    Route::get('/admin/team_member/update/{id}', 'update_team_member_view');
    Route::post('/admin/team_member/create', 'create_team_member');
    Route::post('/admin/team_member/update/{id}', 'update_team_member');
    Route::delete('/admin/team_member/delete/{id}','delete_team_member');
});
Route::middleware('authwithadmin')->controller(TermConditionController::class)->group(function () {
    Route::get('/admin/term_condition', 'show_term_condition')->name('term_condition_list');
    Route::get('/admin/term_condition/create', 'create_term_condition_view');
    Route::get('/admin/term_condition/update/{id}', 'update_term_condition_view');
    Route::post('/admin/term_condition/create', 'create_term_condition');
    Route::post('/admin/term_condition/update/{id}', 'update_term_condition');
    Route::delete('/admin/term_condition/delete/{id}','delete_term_condition');
});

Route::middleware('authwithadmin')->controller(ProjectController::class)->group(function () {
    Route::get('/admin/solution', 'show_project')->name('project_list');
    Route::get('/admin/solution/create', 'create_project_view');
    Route::get('/admin/solution/update/{id}', 'update_project_view');
    Route::post('/admin/project/create', 'create_project');
    Route::post('/admin/project/update/{id}', 'update_project');
    Route::delete('/admin/project/delete/{id}','delete_project');
});

Route::middleware('authwithadmin')->controller(ClientController::class)->group(function () {
    Route::get('/admin/client', 'show_client')->name('client_list');
    Route::get('/admin/client/create', 'create_client_view');
    Route::get('/admin/client/update/{id}', 'update_client_view');
    Route::post('/admin/client/create', 'create_client');
    Route::post('/admin/client/update/{id}', 'update_client');
    Route::delete('/admin/client/delete/{id}','delete_client');
});

Route::middleware('authwithadmin')->controller(PartnerController::class)->group(function () {
    Route::get('/admin/partner', 'show_partner')->name('partner_list');
    Route::get('/admin/partner/create', 'create_partner_view');
    Route::get('/admin/partner/update/{id}', 'update_partner_view');
    Route::post('/admin/partner/create', 'create_partner');
    Route::post('/admin/partner/update/{id}', 'update_partner');
    Route::delete('/admin/partner/delete/{id}','delete_partner');
});


Route::middleware('authwithadmin')->controller(OfferController::class)->group(function () {
    Route::get('/admin/offer', 'show_offer')->name('offer_list');
    Route::get('/admin/offer/create', 'create_offer_view');
    Route::get('/admin/offer/update/{id}', 'update_offer_view');
    Route::post('/admin/offer/create', 'create_offer');
    Route::post('/admin/offer/update/{id}', 'update_offer');
    Route::delete('/admin/offer/delete/{id}','delete_offer');
});

Route::middleware('authwithadmin')->controller(SkillsController::class)->group(function () {
    Route::get('/admin/skills', 'show_skills')->name('skills_list');
    Route::get('/admin/skills/create', 'create_skills_view');
    Route::get('/admin/skills/update/{id}', 'update_skills_view');
    Route::post('/admin/skills/create', 'create_skills');
    Route::post('/admin/skills/update/{id}', 'update_skills');
    Route::delete('/admin/skills/delete/{id}','delete_skills');
});

Route::middleware('authwithadmin')->controller(NewsController::class)->group(function () {
    Route::get('/admin/news', 'show_news')->name('news_list');
    Route::get('/admin/news/create', 'create_news_view');
    Route::get('/admin/news/update/{id}', 'update_news_view');
    Route::post('/admin/news/create', 'create_news');
    Route::post('/admin/news/update/{id}', 'update_news');
    Route::delete('/admin/news/delete/{id}','delete_news');
});

Route::middleware('authwithadmin')->controller(UserController::class)->group(function () {
    Route::get('/admin/user', 'show_user')->name('user_list');
    Route::get('/admin/user/create', 'create_user_view');
    Route::get('/admin/user/update/{id}', 'update_user_view');
    Route::post('/admin/user/create', 'create_user');
    Route::post('/admin/user/update/{id}', 'update_user');
    Route::delete('/admin/user/delete/{id}','delete_user');
});

Route::middleware('authwithadmin')->controller(CompanyProfileController::class)->group(function () {
    Route::get('/admin/company-profile/create', 'create_profile_view');
    Route::post('/admin/company-profile/create', 'create_company_profile');

});


Route::middleware('authwithadmin')->controller(SeoController::class)->group(function () {
    Route::get('/admin/seo/update/{type}/{id}', 'update_seo_view');
    Route::post('/admin/seo/update/{id}', 'update_seo');
});

Route::middleware('authwithadmin')->controller(ContactController::class)->group(function () {
    Route::get('/admin/contact', 'show_contact')->name('contact_list');
    Route::delete('/admin/contact/delete/{id}', 'delete_contact');
});



require __DIR__.'/auth.php';
