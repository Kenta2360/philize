<?php

namespace App\Http\Controllers;

use App\Http\Requests\BulletinRequest;
use App\Http\Requests\CommentRequest;
use App\Models\Category;
use App\Models\BulletinBoard;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;



class BulletinBoardController extends Controller
{
    public function index(){
        $all_boards = BulletinBoard::latest()->get();
        $all_categories = Category::all();
        return view('bulletin-board.bulletin-board', compact('all_boards', 'all_categories'));
    }

    public function selectIndex($id){
        $all_boards = BulletinBoard::where('category_id', $id)->get();
        $all_categories = Category::all();
        return view('bulletin-board.bulletin-board', compact('all_boards', 'all_categories'));
    }

    public function create(){
        $all_categories = Category::all();
        return view('bulletin-board.create-board', compact('all_categories'));
    }

    public function store(BulletinRequest $request){
        BulletinBoard::create([
            'title'       => $request->title,
            'content' => $request->content,
            'user_id'     => Auth::user()->id,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('board.create');
    }

    public function show($id){
        $board = BulletinBoard::findOrFail($id);
        $all_comments = Comment::where('board_id', $id)->get();
        return view('bulletin-board.board-detail', compact('board', 'all_comments'));
    }

    public function commentStore(CommentRequest $request){
        Comment::create([
            'content'   => $request->content,
            'board_id'  => $request->board_id,
            'user_id'   => Auth::user()->id
        ]);
        return redirect()->back();
    }
}
