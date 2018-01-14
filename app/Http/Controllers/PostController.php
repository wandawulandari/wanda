<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
	{
		$posts = Post::all();
		return view('post.index', compact('posts'));
	}
	public function create()
		{
			$categories = Category::all();
			return view('post.create',compact('categories'));
		}
		public function store(Request $request)
		{
			$data = $request->except('featured_image');
			$data['featured_image'] = $request->file('featured_image')->store('photo',
			'public');
			Post::create($data);
			return redirect('post');
		}
		public function show(Post $post)
		{
			$post->view+=1;
			$post->save();
			return view('post.show', compact('post'));
		}
		public function edit(Post $post)
		{
			$categories = Category::all();
			return view('post.edit',compact('categories','post'));
		}
		public function update(Request $request, Post $post)
		{
			$data = $request->except('featured_image');
			$data['featured_image'] = $request->file('featured_image')->store('photo',
			'public');
			$post->update($data);
			return redirect('post');
		}
		public function destroy(Post $post)
		{ 
			$post->delete(); return redirect('post');
		}
}