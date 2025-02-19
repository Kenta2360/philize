<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Http\Requests\RegionRequest;

class RegionController extends Controller
{
    public function index(){
        return view('admin.create.region');
    }

    public function store(RegionRequest $request){
        Region::create([
            'name' => $request->name
        ]);

        return redirect()->route('admin.region.create')->with('success', '情報が投稿されました！');
    }
}
