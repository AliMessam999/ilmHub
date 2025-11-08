<?php

namespace App\View\Components;

use App\Models\CdCareer;
use App\Models\CdCategory;
use App\Models\CdContact;
use App\Models\CdMenu;
use App\Models\CdProfile;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Footer extends Component
{
    public $footer;
    public function __construct()
    {
        $data = new \StdClass;
        $data->services = CdCategory::wherehas('menu', function ($query) {
            return $query->where('menu_id', 2);
        })->whereNull('parent')->get();
        $data->resources = CdCategory::wherehas('menu', function ($query) {
            $query->where('id');
        })->whereNull('parent')->get();
        // $data->links = CdProfile::all();
        $data->profile = CdProfile::first();
        $this->footer = $data;
        // dd($this->footer->services);
    }
    public function render()
    {
        //  dd($footer);
        return view('includes.footer');
    }
}
