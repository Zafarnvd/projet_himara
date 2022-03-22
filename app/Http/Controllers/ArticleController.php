<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CategorieArticle;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = CategorieArticle::all();
        return view('admin.articles.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->tags);
        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->categorie_article_id = $request->categorie_article_id;
        $article->user_id = Auth::id();
        $filename = Storage::disk('public')->put('image/', $request->img);
        $article->img = $filename;
        $article->save();
        $article->tags()->attach($request->tags);
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($article)
    {
        $article = Article::find($article);
        $tags = Tag::all();
        $categories = CategorieArticle::all();
        return view('admin.articles.edit', compact('tags', 'categories', 'article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $article)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->categorie_article_id = $request->categorie_article_id;
        $article->user_id = Auth::id();
        if ($request->img != null) {
            
            if (Storage::disk('public')->exists($article->img)) {
                Storage::disk('public')->delete($article->img);
            }
            $filename = Storage::disk('public')->put('/image', $request->img);
            $article->img = $filename;
        }
        $article->save();
        if ($request->tags) {
            $article->tags()->detach();
            $article->tags()->attach($request->tags);
        }
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
