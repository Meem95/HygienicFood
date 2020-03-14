<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\SubCategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\View\View;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */

    public function index()
    {
        $subCategories= SubCategory::latest()->get();
//        $categories=Category::all();
        return view('backend.Admin.product.subcategory.index',compact('subCategories'));
    }

    public function create()
    {
        $categories =Category::all();
        return view('backend.Admin.product.subcategory.create',compact('categories'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:sub_categories',
            'category_id' => 'required'
        ]);
        $subCategories = new SubCategory();
        $subCategories->name = $request->name;
        $subCategories->category_id = $request->category_id;
        $subCategories->slug =  Str::slug($request->name);
        $subCategories->save();
        Toastr::success('SubCategory Created Successfully','Success');
        return  redirect()->route("admin.subcategory.index");
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $categories=Category::all();
        $subCategories=SubCategory::find($id);
        return view('backend.Admin.product.subcategory.edit',compact('subCategories','categories'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:sub_categories',
            'category_id' => 'required'
        ]);
        $subCategories =SubCategory::find($id);
        $subCategories->name = $request->name;
        $subCategories->category_id = $request->category_id;
        $subCategories->slug =  Str::slug($request->name);
        $subCategories->save();
        Toastr::success('SubCategory Created Successfully','Success');
        return  redirect()->route("admin.subcategory.index");
    }


    public function destroy($id)
    {
        SubCategory::destroy($id);
        Toastr::success('SubCategory Deleted Successfully','Success');
        return  redirect()->route("admin.subcategory.index");

    }
}
