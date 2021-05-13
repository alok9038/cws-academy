<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    public function subCategory(){
        $data['categories'] = Category::all();
        $data['sub_categories'] = SubCategory::all();
        return view('admin.subcategory',$data);
    }
    public function storeSubCategory(Request $request){
        $request->validate([
            'cat_title' => 'required',
            'cat_id' => 'required',
            'cat_description' => 'required',
        ]);

        $slug = Str::slug($request->cat_title, '-');

        $category = new SubCategory;
        $category->title = $request->cat_title;
        $category->cat_id = $request->cat_id;
        $category->description = $request->cat_description;
        $category->slug = $slug;
        $category->save();

        return redirect()->back();
    }
}
