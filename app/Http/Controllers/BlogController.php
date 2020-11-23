<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function savePost(Request $request) {
        $this->validate($request, [
           'blogPostTitle' => 'required|max:255',
           'blogPostContent' => 'required|max:2500'
        ]);

        $blogPost = new BlogPost();
        $blogPost->setAttribute("title", $request['blogPostTitle']);
        $blogPost->setAttribute("message", $request['blogPostContent']);
        $blogPost->save();
        return redirect("/blog/list");
    }
}
