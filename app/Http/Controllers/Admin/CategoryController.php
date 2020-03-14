<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::latest()->get();
        return view('backend.Admin.product.category.index',compact('categories'));
    }


    public function create()
    {
      return view('backend.Admin.product.category.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $categories = new Category();
        $categories->name = $request->name;
        $categories->slug = Str::slug($request->name);
        $categories->save();
        Toastr::success('Category Created Successfully', 'Success');
        return redirect()->route('admin.category.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $categories = Category::find($id);
        return view('backend.Admin.product.category.edit',compact('categories'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $categories = Category::find($id);
        $categories->name = $request->name;
        $categories->slug = Str::slug($request->name);
        $categories->save();
        Toastr::success('Category Updated Successfully', 'Success');
        return redirect()->route('admin.category.index');
    }


    public function destroy($id)
    {

        Category::destroy($id);
        Toastr::success('Category Deleted Successfully', 'Success');
        return redirect()->route('admin.category.index');
    }
}
