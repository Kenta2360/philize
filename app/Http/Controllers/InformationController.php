<?php

namespace App\Http\Controllers;

use App\Http\Requests\InformationRequest;
use App\Models\Category;
use App\Models\Region;
use App\Models\Information;
use App\Models\Section;
use Illuminate\Support\Facades\Auth;


class InformationController extends Controller
{
    public function index(){
        $query = Information::query();

        if(request()->has('category_id') && request()->category_id !== 'all'){
            $query->where('category_id', request()->category_id);
        }

        if(request()->has('region_id') && request()->region_id !== 'all'){
            $query->where('region_id', request()->region_id);
        }

        $all_information = $query->latest()->get();
        $all_categories = Category::all();
        $all_regions = Region::all();
        return view('information.index', compact('all_information', 'all_categories', 'all_regions'));
    }


    public function show($id){
        $information = Information::findOrFail($id);
        $sections = Section::where('information_id', $id)->get();
        return view('information.show', compact('information', 'sections'));
    }


    public function create(){
        $all_categories = Category::all();
        $all_regions = Region::all();
        return view('admin.create.information', compact('all_categories', 'all_regions'));
    }

    public function store(InformationRequest $request){
        $information = Information::create([
            'title'       => $request->title,
            'intro'     => $request->intro,
            'category_id' => $request->category_id,
            'region_id' => $request->region_id,
            'user_id'     => Auth::user()->id
        ]);

        if($request->has('sections')){
            foreach($request->sections as $section){
                $information->sections()->create([
                    'heading' => $section['heading'],
                    'content' =>$section['content']
                ]);
            }
        }
        return redirect()->route('admin.information.create')->with('success', '情報が投稿されました！');
    }
}
