<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
      $blogs = Blog::all();

      return view('blog/home',['blogs'=>$blogs]);
    }

    public function show($id)
    {
      $blogs = Blog::find($id);
      if (!$blogs) {
        abort(404);
      }
      return view('blog/single',['blogs'=>$blogs]);
    }

    public function create()
    {
      return view('blog/create');
    }

    public function store(Request $request){
      $this->validate($request,[
        'title'       => 'required|min:5',
        'description' => 'required|min:10'
      ]);

      $blogs = new Blog;
      $blogs->title       = $request->title;
      $blogs->description = $request->description;
      $blogs->save();
      return redirect('blog');
    }
    public function edit($id)
    {
      $blogs = Blog::find($id);

      if (!$blogs) {
        abort(404);
      }
      return view('blog/edit',['blogs'=>$blogs]);
    }

    public function update(Request $request, $id)
    {
      $blog = Blog::find($id);
      $blog->title        = $request->title;
      $blog->description  = $request->description;
      $blog->save();

      return redirect('blog'.$id);
    }

    public function delete($id)
    {
      $blogs = Blog::find($id);
      $blogs->delete();
      return redirect('blog');
    }
}
