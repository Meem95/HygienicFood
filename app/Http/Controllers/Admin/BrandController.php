<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class BrandController extends Controller
{

    public function index()
    {
        $brands=Brand::latest()->get();
        return view('backend.Admin.product.brand.index',compact('brands'));
    }


    public function create()
    {
        return view('backend.Admin.product.brand.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);
        $brand=new Brand();
        $brand->name =$request->name;
        $brand->slug = Str::slug($request->name);
        $brand->save();
        Toastr::success('Brand Created Successfully', 'Success');
        return redirect()->route('admin.brand.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $brand=Brand::find($id);
        return view('backend.Admin.product.brand.edit',compact('brand'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);
        $brand=Brand::find($id);
        $brand->name =$request->name;
        $brand->slug = Str::slug($request->name);
        $brand->save();
        Toastr::success('Brand Update Successfully', 'Success');
        return redirect()->route('admin.brand.index');
    }


    public function destroy($id)
    {
        Brand::find($id)->delete();
        Toastr::success('Brand Deleted Successfully', 'Success');
        return redirect()->route('admin.brand.index');
    }
}
