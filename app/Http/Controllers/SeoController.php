<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seo;
use App\Models\Blog;

class SeoController extends Controller
{
    public function update_seo_view($type, $id)
    {
        $data['seo'] = Seo::where(['seoable_id' => $id, 'seoable_type' => $type])->first();

        return view('admin.seo.update', $data);
    }

    public function update_seo(Request $request, Seo $seo)
    {
        $data = $request->validate([
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'meta_author' => 'nullable|string|max:255',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image' => 'nullable|string|max:255',
            'og_type' => 'nullable|string|max:255',
            'og_url' => 'nullable|string|max:255',
        ]);

        $seo->update($data);

        return redirect()->route('seos.index')->with('success', 'SEO updated successfully.');
    }
}
