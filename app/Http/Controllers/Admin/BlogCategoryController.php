<?php

namespace App\Http\Controllers\Admin;

use App\BlogCategory;
use Brian2694\Toastr\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{

    public function index()
    {
        $blogCategories = BlogCategory::latest()->get();
        return view('backend.Admin.blog.category.index',compact('blogCategories'));
    }


    public function create()
    {
        return view('backend.Admin.blog.category.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);
        $blogCategory= new BlogCategory();
        $blogCategory->name=$request->name;
        $blogCategory->slug = Str::slug($request->name);
        $blogCategory->save();
        \Brian2694\Toastr\Facades\Toastr::success('Blog-Category Created Successfully', 'Success');
        return redirect()->route('admin.blog-category.index');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $blogCategory=BlogCategory::find($id);
        return view('backend.Admin.blog.category.edit',compact('blogCategory'));

    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);
        $blogCategory=BlogCategory::find($id);
        $blogCategory->name=$request->name;
        $blogCategory->slug = Str::slug($request->name);
        $blogCategory->save();
        \Brian2694\Toastr\Facades\Toastr::success('Blog-Category Updated Successfully', 'Success');
        return redirect()->route('admin.blog-category.index');
    }


    public function destroy($id)
    {
        BlogCategory::destroy($id);;
        \Brian2694\Toastr\Facades\Toastr::success('Blog-Category Deleted Successfully', 'Success');
        return redirect()->route('admin.blog-category.index');

    }
}
