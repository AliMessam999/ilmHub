<?php

namespace App\View\Components;

use Closure;
use App\Models\CdNew;
use App\Models\CdGallary;
use App\Models\CdProfile;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class OldFooter extends Component
{
    /**
     * Create a new component instance.
     */
    public $footer;
    public function __construct()
    {
        //
           $data = new \StdClass;
        $data->news = CdNew::WhereHas('category',function($query){
            $query->where('title','LIKE','%ict%');
        })->OrderBy('created_at','desc')->limit(6)->get();
        $data->news_hydromet = CdNew::WhereHas('category',function($query){
            $query->where('title','LIKE','%hydromet%');
        })->OrderBy('created_at','desc')->limit(6)->get();
        $data->gallery = CdGallary::OrderBy('created_at','desc')->limit(8)->get();
        $data->profile = CdProfile::first();
        $this->footer = $data;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.old-footer');
    }
}
