<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        //$posts = Post::orderBy('created_at', 'DESC')->get();

        $posts = DB::table('posts')
            ->join('users', 'posts.author', '=', 'users.id')
            ->select('posts.uri', 'posts.title', 'posts.subtitle', 'posts.cover', 'posts.content', 'posts.created_at', 'users.name')
            ->get();
        $head = $this->seo->render(
            env('APP_NAME') . ' - Blog',
            'Blog com novidade no mundo do Marketing, ferramentas de desenvolvimento e otimização empresas.',
            url(env('APP_URL')),
            asset('front/assets/images/contact.jpg')
        );
        return view('front.blog', [
            'posts' => $posts,
            'head' => $head
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function show($uri)
    {
        $post = Post::where('uri', $uri)->first();
        $postAuthor = $post->author()->get()->first();
        $head = $this->seo->render(
            env('APP_NAME') . ' - '. $post->title,
            $post->title,
            url(env('APP_URL')),
            \Illuminate\Support\Facades\Storage::url(\solutionstec\Support\Cropper::thumb($post->cover, 800, 450))
        );
        return view('front.article', [
            'post' => $post,
            'author' => $postAuthor,
            'head' => $head
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
