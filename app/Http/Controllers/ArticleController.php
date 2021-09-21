<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }


    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return  view('articles.create');
    }

    public function edit($id)
    {
        $article = article::find($id);
        return view('articles.edit', ['article' => $article]);
    }

    public function store(Request $request)
    {
        $article = new Article;

        $article->title = $request->title;
        $article->body = $request->body;
        $article->timestamps = false;

        $article->save();
        // 登録したらindexに戻る
        return redirect('/articles');
    }

    public function update(Request $request, $id) 
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $article = article::find($id);
    // 値の用意

    $article->title = $request->title;
    $article->body = $request->body;
    $article->timestamps = false;

        // 保存
        $article->save();
        // 登録したらindexに戻る
        return redirect('/articles');
    }
    public function destroy($id)
    {
        $item = article::find($id);
        $item->delete();
        return redirect('/articles');
    }
}
