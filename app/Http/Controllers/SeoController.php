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
        $seoType = 'App\\Models\\' . $type;
        $data['seoable_type'] = $seoType;
        $data['seoable_id'] = $id;

        $data['seo'] = Seo::where(['seoable_id' => $id, 'seoable_type' => $seoType])->first();

        return view('admin.seo.update', $data);
    }


    public function update_seo(Request $request)
    {
        $data = $request->validate([
            'seoable_id' => 'required|integer',
            'seoable_type' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'meta_author' => 'nullable|string|max:255',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'og_type' => 'nullable|string|max:255',
            'og_url' => 'nullable|string|max:255',
        ]);

        // Handle OG image upload
        if ($request->hasFile('og_image')) {
            $path = $request->file('og_image')->store('uploads/seo', 'public');
            $data['og_image'] = $path;
        }

        // Force correct model namespace
        // $data['seoable_type'] = 'App\\Models\\' . $request->seoable_type;

        $seo = Seo::updateOrCreate(
            [
                'seoable_id' => $data['seoable_id'],
                'seoable_type' => $data['seoable_type'],
            ],
            $data
        );

        if ($seo) {
            return response()->json([
                "message" => "SEO Saved Successfully"
            ], 200);
        }

        return response()->json([
            "message" => "Something went wrong"
        ], 500);
    }
}
