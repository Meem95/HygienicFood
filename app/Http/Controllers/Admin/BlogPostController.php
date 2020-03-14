<?php

namespace App\Http\Controllers\Admin;

use App\BlogCategory;
use App\BlogPost;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BlogPostController extends Controller
{

    public function index()
    {
        $blogPosts=BlogPost::latest()->get();
//        $category=BlogCategory::all();
        return view('backend.Admin.blog.post.index',compact('blogPosts','category'));

    }


    public function create()
    {
        $categories=BlogCategory::all();
        return view('backend.Admin.blog.post.create',compact('categories'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required',
            'category_id'=> 'required',
            'description'=> 'required',
            'image'=> 'required',
        ]);
        $post = new BlogPost();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->blog_category_id = $request->category_id;
        $post->description = $request->description;
        $image = $request->file('image');
        if (isset($image)) {
            //make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
//            resize image for hospital and upload
            $proImage = Image::make($image)->resize(818, 461)->save($image->getClientOriginalExtension());
            Storage::disk('public')->put('uploads/post/'. $imagename, $proImage);

            //thumbnails
            $proImage = Image::make($image)->resize(390, 290)->save($image->getClientOriginalExtension());
            Storage::disk('public')->put('uploads/post/thumbnails/'. $imagename, $proImage);
        }else {
            $imagename = "default.png";
        }

        $post->image = $imagename;
        $post->save();

        Toastr::success('Post Created Successfully', 'Success');
        return redirect()->route('admin.blog-post.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $post = BlogPost::find($id);
        $categories = BlogCategory::all();
        return view('backend.admin.Blog.post.edit',compact('post','categories'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=> 'required',
            'category_id'=> 'required',
            'description'=> 'required',
        ]);
        $post =  BlogPost::find($id);
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->blog_category_id = $request->category_id;
        $post->description = $request->description;
        $image = $request->file('image');
        if (isset($image)) {
            //make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            //delete old image.....
            if(Storage::disk('public')->exists('uploads/post/'.$post->image))
            {
                Storage::disk('public')->delete('uploads/post/'.$post->image);
                Storage::disk('public')->delete('uploads/post/thumbnails/'.$post->image);
            }

//            resize image for hospital and upload
            $proImage = Image::make($image)->resize(818, 461)->save($image->getClientOriginalExtension());
            Storage::disk('public')->put('uploads/post/' . $imagename, $proImage);

            //thumbnails
            $proImage = Image::make($image)->resize(390, 290)->save($image->getClientOriginalExtension());
            Storage::disk('public')->put('uploads/post/thumbnails/' . $imagename, $proImage);
        }else {
            $imagename = $post->image;
        }

        $post->image = $imagename;
        $post->save();
        Toastr::success('Post Updated Successfully', 'Success');
        return redirect()->route('admin.blog-post.index');
    }


    public function destroy($id)
    {
        BlogPost::destroy($id);
        Toastr::success('Post Deleted Successfully', 'Success');
        return redirect()->route('admin.blog-post.index');
    }
}
