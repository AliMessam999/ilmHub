<?php

namespace App\View\Components;

use App\Models\CdFooter;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Symfony\Component\Routing\Route;

class CtaSection extends Component
{
    /**
     * Create a new component instance.
     */


    public $footer;

    // public function __construct()
    // {
    //     //
    //     $url = request()->path();
    //     $cta = CdFooter::whereHas('menu',function($query) use($url){
    //         $query->where('slug','LIKE','%'.$url.'%');
    //     })->limit(1)->first();
    //     // dd($cta);
    //     $this->footer = $cta;
    //     // dd($this->footer);

    // }


//     public function __construct()
// {
//     $url = request()->path();

//     // $menu =

//     $cta = CdFooter::with(['menu', 'category', 'subCategory'])
//         ->whereHas('menu', function($query) use ($url) {
//             $query->where('slug', 'LIKE', '%' . $url . '%');
//         })
//         ->orWhereHas('category', function($query) use ($url) {
//             $query->where('slug', 'LIKE', '%' . $url . '%');
//         })
//         ->orWhereHas('sub_category', function($query) use ($url) {
//             $query->where('slug', 'LIKE', '%' . $url . '%');
//         })
//         ->first();

//     $this->footer = $cta;




public function __construct()
{
    $url = request()->path();

    // 1️⃣ Menu match check
    $menuFooter = CdFooter::with(['menu'])
        ->whereHas('menu', function($query) use ($url) {
            $query->where('slug', 'like', '%' . $url . '%');
        })
        ->first();

    if ($menuFooter) {
        $this->footer = $menuFooter;
        return;
    }

    // 2️⃣ Category match check
    $categoryFooter = CdFooter::with(['category'])
        ->whereHas('category', function($query) use ($url) {
            $query->where('slug', 'like', '%' . $url . '%');
        })
        ->first();

    if ($categoryFooter) {
        $this->footer = $categoryFooter;
        return;
    }

    // 3️⃣ Sub-category match check
    $subCategoryFooter = CdFooter::with(['sub_category'])
        ->whereHas('sub_category', function($query) use ($url) {
            $query->where('slug', 'like', '%' . $url . '%');
        })
        ->first();

    if ($subCategoryFooter) {
        $this->footer = $subCategoryFooter;
        return;
    }

    // 4️⃣ Default Null
    $this->footer = "No Record Found";
}



    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('includes.cta-section');
    }

}