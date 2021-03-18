<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{

    /*
    *   This is function is for to get blogs from DB
    *   And display them on this page!
    */
    public function blogs() {
        return view("blogs", ["blogs" => Blog::get()]);
    }
    public function viewBlog(Blog $blog) {
       return view("blog", ["blog" => $blog]);
    }
}
