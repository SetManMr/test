<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search){
           $posts = Post::join('users', 'author_id', '=', 'users.id')
                ->where('site_name', 'like', '%'.$request->search.'%')
                ->orWhere('descr', 'like', '%'.$request->search.'%')
                ->orWhere('name', 'like', '%'.$request->search.'%')
                ->orderBy('posts.created_at', 'desc')
                ->get();
                return view('posts.index', compact('posts'));
        }

       $posts = Post::join('users', 'author_id', '=', 'users.id')
       ->orderBy('posts.created_at', 'desc')
       ->paginate(4);
       return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->site_name =$request->site_name;
        $post->phone =$request->phone;
        $post->email =$request->email;
        $post->descr =$request->descr;
        $post->author_id = \Auth::user()->id;

        $post->save();
        return redirect()->route('post.index')->with('success', 'Мы отправим вам на почту пароль и инструкцию');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::join('users', 'author_id', '=', 'users.id')
            ->find($id);
            if (!$post) {
                return redirect()->route('post.index')->withErrors('Anti hack');
            }
        return view('posts.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        if ($post->author_id != \Auth::user()->id) {
            return redirect()->route('post.index')->withErrors('Anti hack');
        }
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        if ($post->author_id != \Auth::user()->id) {
            return redirect()->route('post.index')->withErrors('Anti hack');
        }
        $post->site_name =$request->site_name;
        $post->phone =$request->phone;
        $post->email =$request->email;
        $post->descr =$request->descr;

        $post->update();
        $id = $post->post_id;
        return redirect()->route('post.show', compact('id'))->with('success', 'Вы отредоктировали свои данные');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if ($post->author_id != \Auth::user()->id) {
            return redirect()->route('post.index')->withErrors('Anti hack');
        }
        $post->delete();
        return redirect()->route('post.index')->with('success', 'You are destroyed information');
    }
}
