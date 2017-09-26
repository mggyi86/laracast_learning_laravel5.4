<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{

    public function __construct()
    {
        $this-> middleware('auth')->except(['index', 'show']);
    }   

    public function index()
    {
        // return $tag->posts->pluck('title');

        $posts  =   Post::latest()->filter(request(['month', 'year']))->get();

/*        $posts = Post::latest();

        if($month = request('month')) {
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = request('year')){
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();*/

        // $archives = Post::archives();

    	return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
   /*     $archives   =   Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year', 'month')->orderByRaw('min(created_at) desc')->get()->toArray();*/
        $post = Post::find($id);
    	return view('posts.show', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body'  =>  'required'
        ]);

        auth()->user()->publish(
            new Post([
                'title' => $request->title,
                'body'  => $request->body
            ])
        );

        session()->flash('message', 'Your post has now been published');

        return redirect('/');
    }
}
