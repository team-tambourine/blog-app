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
        return view('boards.index');
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

    public function show()
    {
        $article = Board::find($request->id);

        return view('boards.show', ['article' => $article]);
    }
}
