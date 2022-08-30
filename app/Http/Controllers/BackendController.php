<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BackendController extends Controller
{



    function blogEdit( Blog $blog){
        return view('backend.dashboard.edit', compact('blog'));
    }

    function blogUpdate(Request $request, Blog $blog){

        // return $request;
        $blog->title = $request->title;
        $blog->status = $request->status;
        $blog->body = $request->blog_body;

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $blog->image =  $imageName;

        }
        $blog->save();

        return back()->with('success','You have successfully upload blog!.');
    }

    function blogDelete( Blog $blog){
        return $blog;
    }
    function index()
    {
        $blogs  = Blog::get();
        return view('backend.dashboard.index', compact('blogs'));
    }
    function create()
    {
        return view('backend.dashboard.create');
    }

    function blogInsert(Request $request){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName ="NULL";
        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);

        }



        $blog = new Blog();
        $blog->title = $request->title;
        $blog->image =  $imageName;
        $blog->status = $request->status;
        $blog->body = $request->blog_body;
        $blog->save();

        return back()->with('success','You have successfully upload blog!.');

    }
}
