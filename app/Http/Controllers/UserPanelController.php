<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class UserPanelController extends Controller
{
    public function index()
    {
        return view('userpanel.home.index',[
            'blogs' => Blog::all()
        ]);
    }

    public function show(Blog $blog)
    {
        // return $blog->load('comments.commented_by');
        return view('userpanel.home.show',[
            'blog' => $blog->load('comments.commented_by')
        ]);

    }
}
