<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $categories;
    public function __construct()
    {
        //
        
        $headers = \App\Models\CdMenu::with('categories','categories.sub_categories')->get()->toArray();
        $this->categories = $headers;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu-item');
    }
}
