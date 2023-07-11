<?php

namespace App\Http\Controllers\Admin;
use App\Models\category;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }
    public function create()
    {
        return view('admin.post.create');
        // $category = Category::where('status','0')->get();
        // return view('admin.post.create', compact('category'));
    }

     public function store(PostFormRequest $request)
    { 
        $data = $request->validated();
        $post = new Post;
        $post->category_id = $data['category_id'];
        $post->name = $data['name']; 
        $post->description = $data['description'];
        $post->yt_iframe = $data['yt_iframe'];
        $post->meta_title = $data['meta_title'];
        $post->meta_description = $data['meta_description'];
        $post->save();
        return redirect('admin/posts')->with('message' , 'post added successfully');

    }

    public function edit($post_id)
    {
        $post = Post::find($post_id);
        return view('admin.post.edit', compact('post'));
    }

    public function update(PostFormRequest  $request, $post_id)
   {
        $data = $request->validated();
       
        $post =  Post::find($post_id);
        $post->category_id = $data['category_id'];
        $post->name = $data['name']; 
        $post->description = $data['description'];
        $post->yt_iframe = $data['yt_iframe'];
        $post->meta_title = $data['meta_title'];
        $post->meta_description = $data['meta_description'];
        $post->update();
        return redirect('admin/posts')->with('message' , 'post updated successfully');
    }

    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();
        return redirect('admin/posts')->with('message','Post deleted successfully');
    }
}