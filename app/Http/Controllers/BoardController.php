<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    //記事一覧
    public function index(Request $request)
    {
        $articles = Board::all();
        return view('boards.articleList', ['articles' => $articles]);
    }

    public function add()
    {
        return view('boards.create');
    }

    public function create(Request $request)
    {
        /*バリデーションする? ....*/
        $board = new Board;
        $article = $request->all();
        unset($article['_token']);
        $board->fill($article)->save();

        return redirect('/list');
    }

    public function show($id)
    {
        $article = Board::find($id);

        return view('boards.articleDetail', ['article' => $article]);
    }
}
