<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class BlogController extends Controller
{

    /*
    *   This is function is for to get blogs from DB
    *   And display them on this page!
    */
    public function blogs() {
        return view("blogs", ["blogs" => Blog::get()]);
    }

    /*
    *   This function is for to view blogs on main page
    *
    */
    public function viewBlog(Blog $blog) {
        $blog->views = $blog->views + 1;
        $blog->save();

       return view("blog", [
           "blog" => $blog,
           "comments" => Comment::where('blog_id' , $blog->id)->get(),
       ]);
    }

    public function store() {
        $validated = request()->validate([
            "title" => "required",
            "desc" => "required",
            "body" => "required",
            "photo_path" => "required|mimes:jpg,png,jpeg",
        ]);
        $newIMGname = time() . "-" . auth()->user()->id . "." . request()->photo_path->extension();

        // dd(auth()->user()->id);
        $blog = new Blog([
            "title" => request()->title,
            "desc" => request()->desc,
            "body" => request()->body,
            "photo_path" => "/images/$newIMGname",
        ]);
        $blog->user_id = auth()->user()->id;
        $blog->save();
        request()->photo_path->move(public_path("images"), $newIMGname);
        return redirect(route('blogs'));
    }
}




