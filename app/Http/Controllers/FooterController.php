<?php

namespace App\Http\Controllers;

use App\Models\CdCategory;
use Illuminate\Http\Request;
use App\Models\CdFooter;
use App\Models\CdMenu;
use Illuminate\Support\Facades\Validator;

class FooterController extends Controller
{
    public function show_footer()
    {
        
        // $element = CdFooter::with('menu','category.sub_category')->paginate(15);
        // $element = CdFooter::with('menu','category','sub_category')->get()->last();
        // dd($element->category_id);
        $element = CdFooter::with('menu','category','sub_category')->paginate(15);


        // $items = CdMenu::with('menu')->get();
        // dd($element->);
        return view('admin.footer.index', compact('element'));
    }

    // public function homepage(){
        //  $footers = CdFooter::with(['menu', 'category', 'subCategory'])->get();
        //  $footer = CdFooter::latest()->first();
//  $footer = CdFooter::latest()->first();  // get latest record
//     return view('includes.cta-section', compact('footer'));
    // return view('frontend.home', compact('footer'));
    // }

    public function create_footer_view()
    {
        $categories = CdCategory::where('parent', null)->get();
        $subCategories = CdCategory::whereNotNull('parent')->get();
        $menus = CdMenu::all();
        return view('admin.footer.create', compact('categories', 'menus','subCategories' ));

      

        // $menus = CdMenu::all();
        // return view('admin.footer.create', compact('menus'));
    }

    public function update_footer_view($id)
    {
        $footer = CdFooter::find($id);
        $categories = CdCategory::where('parent', null)->get();
        $menus = CdMenu::all();
        return view('admin.footer.update', compact('footer', 'menus', 'categories'));
        // return "Hello";
        // return view('admin.footer.update');
    }

    public function create_footer(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required',
        //     'menu_id' => 'required',
        //     'category_id' => 'required',
        //     'sub_category_id' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 302);
        // } else {

       $request->validate([
            'title' => 'required',
            'menu_id' => 'required',
            
        ]);

        // dd($request->all());
        $footer = new CdFooter();
        $footer->title = $request->title;
        $footer->menu_id = $request->menu_id;
        $footer->category_id = $request->category_id;
        $footer->sub_category_id = $request->sub_category_id;
        $result = $footer->save();
        if ($result) {
            return redirect('/admin/footer')->with('success', 'Footer Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
        //     return response()->json([
        //         "message" => "Footer Created Successfully"
        //     ], 200);
        // } else {
        //     return response()->json([
        //         "message" => "Something Went Wrong"
        //     ], 302);
        // }
    }

    public function delete_footer($id)
    {
    // Find the footer by ID
    $footer = CdFooter::find($id);

    if ($footer) {
        // Delete the footer
        $footer->delete();

        // Return success response
        return response()->json([
            "message" => "Footer deleted successfully"
        ], 200);
    } else {
        // Footer not found
        return response()->json([
            "message" => "Footer not found"
        ], 404);
    }
}


}
    