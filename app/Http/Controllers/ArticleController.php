<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(8);
        return view('page.blog', compact('articles'));
    }

    public function show(string $id)
    {
        $article = Article::findOrFail($id);
        return view('page.showsingleblog', compact('article'));
    }
}
