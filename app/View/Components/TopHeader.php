<?php

namespace App\View\Components;

use App\Models\CdProfile;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TopHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public $profile;
    public function __construct()
    {
        //
        $this->profile = CdProfile::first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.top-header');
    }
}
