<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        return view('pages.edit-article');
    }

    public function edit(Request $request, $id=null)
    {
        $article = null;
        if($id)
            $article = Article::find($id);
        if($request->isMethod('POST'))
        {

            if(!$article)
                $article = new Article($request->only(['name', 'sold', 'barcode']));
            else
                $article->update($request->only(['name', 'sold', 'barcode']));

            $article->save();
            return redirect()->route('article_liste');
        } elseif($article)
            return view('pages.edit-article', ['article' => $article]);
        else return view('pages.edit-article');
    }
    public function delete($id)
    {
        $article = null;
        if($id)
            $article = Article::find($id);
        if($article)
            $article->delete();
        return redirect()->route('article_liste');
    }
    public function liste()
    {
        return view('pages.liste', ['articles' => Article::all()]);
    }
}
