<?php

namespace App\Http\Controllers\Frontend;

use App\BlogCategory;
use App\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Translation\Dumper\PoFileDumper;

class BlogController extends Controller
    {
        public function post()
        {
            $posts=BlogPost::latest()->paginate(4);

            $categories = BlogCategory::all();
            $recentPosts =BlogPost::latest()->take(4)->get();
            return view('frontend.blog.index',compact('posts','categories','recentPosts'));
        }

        public function postDetails()
        {
            return view('frontend.blog.details');
        }
    }
