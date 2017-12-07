<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    // $posts = Post::all();
    $posts = Post::orderBy('created_at', 'desc')->get();
    // $user = User::find(1);
    // $posts = $user->posts;
    return view('index', compact('posts'));
  }
  public function about()
  {
    
    return view('about');
  }
  public function contact()
  {
    
    return view('contact');
  }
  public function create()
  {
    
    return view('create');
  }
  public function store()
  {
    
    $title = request('title');
    $content = request('content');
    Post::create([
      'title' => $title,
      'content' => $content,
      'user_id' => auth()->id()
    ]);
    return redirect ('/');
  }
  public function different($number)
  {
    echo $number;
  }

}
