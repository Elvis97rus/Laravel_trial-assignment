<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::allPaginate(10);
        return view('app.article.index', compact('articles'));
    }

    public function show($slug) {
        $article = Article::findBySlug($slug);
        return view('app.article.show', compact('article'));
    }

    public function allByTag(Tag $tag) {
        $articles = $tag->articles()->findByTag(10);
        return view('app.article.byTag', compact('articles'));
    }
}