<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticeRequest;
use App\Models\Notice;
use Illuminate\Support\Facades\Auth;


class NoticeController extends Controller
{
    public function create(){
        return view('admin.create.notice');
    }

    public function store(NoticeRequest $request){
        Notice::create([
            'title'   => $request->title,
            'content' => $request->content,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('admin.notice.create')->with('success', '情報が投稿されました！');
    }



    public function index(){
        $all_notices = Notice::all();
        return view('notice.index', compact('all_notices'));
    }

    public function show($id){
        $notice = Notice::findOrFail($id);
        return view('notice.show', compact('notice'));
    }
}
