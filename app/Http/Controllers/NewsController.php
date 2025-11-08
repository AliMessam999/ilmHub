<?php

namespace App\Http\Controllers;

use App\Models\CdCategory;
use App\Models\CdNew;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function create_news(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', Rule::unique('cd_news')],
            'category_id' => 'required',
            'description' => 'required',
            'image' => ['required', Rule::imageFile(), 'max:500'],
            'date'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
                $path = $request->file('image')->store('upload/news');
                if(!$path){
                    return response()->json([
                        "message" => "File not store try again!"
                    ], 302);
                }
                $career = new CdNew();
                $career->title = $request->title;
                $career->slug = Str::slug($request->slug);
                $career->category_id = $request->category_id;
                $career->description = $request->description;
                $career->alt = $request->alt;
                $career->date = $request->date;
                $career->tags = $request->tags;
                $career->image = $path;
                $result = $career->save();
                if ($result) {
                    return response()->json([
                        "message" => "Insights Created Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something Went Wrong"
                    ], 302);
                }
        }
    }

    public function delete_news($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of career for deleting"
            ], 302);
        }
        if (CdNew::where('id', $id)->count() > 0) {
            $CdNew = CdNew::where('id', $id)->delete();
            if ($CdNew) {
                return response()->json([
                    "message" => "Insights Deleted Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something went wrong!"
                ], 302);
            }
        } else {
            return response()->json([
                "message" => "Record not found or already deleted"
            ], 302);
        }
    }
    public function show_news($id = null)
    {
        $career = CdNew::with('category')->get();
        // dd($career);
        return view('admin.news.index', compact('career'));
    }
    public function update_news(Request $request, $id)
    {
        if (CdNew::where('id', $id)->count() > 0) {
            if($request->file('image')){
                $validator = Validator::make($request->all(), [
                    'title' => ['required',],
                    'category_id' => 'required',
                    'description' => 'required',
                    'image' => ['required', Rule::imageFile(), 'max:500'],
                    'date'=>'required',
                ]);
                $path = $request->file('image')->store('upload/news');
            }else{
                $validator = Validator::make($request->all(), [
                    'title' => ['required',],
                    'category_id' => 'required',
                    'description' => 'required',
                    'date'=>'required',
                ]);
            }
            if (CdNew::where('id', '!=', $id)->where('title', 'LIKE', $request->title)->count() > 0) {
                return response()->json([
                    "message" => "The Name Has Already Been Taken"
                ], 302);
            }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                if($request->file('image')){
                    $CdNew = CdNew::where('id', $id)->update([
                        'title' => $request->title,
                        'slug' => Str::slug($request->slug),
                        'category_id' => $request->category_id,
                        'description' => $request->description,
                        'alt' => $request->alt,
                        'date' => $request->date,
                        'tags' => $request->tags,
                        'image' => $path,
                    ]);
                }else{
                    $CdNew = CdNew::where('id', $id)->update([
                        'title' => $request->title,
                        'slug' => Str::slug($request->slug),
                        'category_id' => $request->category_id,
                        'description' => $request->description,
                        'date' => $request->date,
                        'tags' => $request->tags,
                        'alt' => $request->alt,
                    ]);
                }
                        if ($CdNew) {
                            return response()->json([
                                "message" => "Insights Updated Successfully"
                            ], 200);
                        } else {
                            return response()->json([
                                "message" => "Something went wrong"
                            ], 302);
                        }
                    }
            }
    }

    public function create_news_view()
    {
        $categories = CdCategory::where('parent',NULL)->get();
        return view('admin.news.create',compact('categories'));
    }

    public function update_news_view($id)
    {
        $menu = CdNew::where('id', $id);
        $categories = CdCategory::where('parent',NULL)->get();
        if ($menu->count() > 0) {
            $menu = $menu->first();
            return view('admin.news.update', compact('menu','categories'));
        } else {
            return redirect('/admin/news');
        }
    }
}
