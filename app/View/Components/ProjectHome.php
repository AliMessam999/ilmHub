<?php

namespace App\View\Components;

use Closure;
use App\Models\CdCategory;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;

class ProjectHome extends Component
{
    /**
     * Create a new component instance.
     */
    public $data;

    public function __construct(CdCategory $cdCategory)
    {
        try {
            $menu = new \stdClass;
            $menu->category = $cdCategory->whereHas('menu', function ($query) {
                return $query->where('title', 'LIKE', '%solutions%');
            })->with('sub_categories.solutions')->get();

            $this->data = $menu;
            // dd($this->data);
        } catch (\Exception $e) {
            // Handle the exception, log it, or rethrow it based on your application's needs.
            Log::error($e->getMessage());
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // dd($this->data);
        $data = $this->data;
        return view('components.project-home',compact('data'));
    }
}
