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
}
