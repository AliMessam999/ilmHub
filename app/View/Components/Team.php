<?php

namespace App\View\Components;

use App\Models\CdTeamMember;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Team extends Component
{
    /**
     * Create a new component instance.
     */
    public $teams;
    public function __construct()
    {
        $this->teams = CdTeamMember::all();
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('includes.team');
    }
}
