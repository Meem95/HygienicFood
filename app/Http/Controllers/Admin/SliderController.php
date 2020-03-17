<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Psy\Util\Str;

class SliderController extends Controller
{

    public function index()
    {
        $sliders=Slider::latest()->get();
        return view('backend.Admin.slider.index',compact('sliders'));
    }

    public function create()
    {
        return view('backend.Admin.slider.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required',
            'image'=> 'required',
        ]);
        $sliders = new Slider();
        $sliders->title = $request->title;
        $image = $request->file('image');
        if (isset($image)) {
            //make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
//            resize image for hospital and upload
            $proImage =Image::make($image)->resize(818, 461)->save($image->getClientOriginalExtension());
            Storage::disk('public')->put('uploads/slider/'.$imagename, $proImage);


        }else {
            $imagename = "default.png";
        }

        $sliders->image = $imagename;
        $sliders->save();
        Toastr::success('Slider Created Successfully', 'Success');
        return redirect()->route('admin.slider.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
