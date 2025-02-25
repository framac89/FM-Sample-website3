<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticleController extends Controller implements HasMiddleware
{
    /**
     * Display a listing of the resource.
     */
    public static function middleware()
    {
        return [
            new Middleware('auth', except: ['home', 'index', 'show', 'create','published'])
        ];
    }



    public function index()
    {
        return view('article.index', ["articles" => Article::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'img' => $request->has('img') ? $request->file('img')->store('images', 'public') : null,
            'user_id'=>Auth::id(),
        ]);

        return redirect()->route('home')->with('success', 'Articolo memorizzato');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article->update([
            'title' => $request->title,
            'body' => $request->body,
            'img' => $request->has('img') ? $request->file('img')->store('images', 'public') : null
        ]);

        return redirect()->route('article.index')->with('success', 'Articolo modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index')->with('success', 'Articolo cancellato');
    }



    public function published(User $user){
        return view('article.published',['user'=>$user]);
    }
}
