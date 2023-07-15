<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() 
    {
        $blogs = Blog::all();

        return view('blogs.index' , ['blogs' => $blogs]);
    }
    public function create() 
    {
        return view('blogs.create');
    }

    public function store(Request $request) 
    {
        $data = $request->validate([
            'title'=> 'required',
            'content'=> 'required|min:10'             
        ]);
        
        auth()->user()->blogs()->create($data);

        return redirect()->route('blog.index')->with('notice' , '文章建立成功');
    }
}