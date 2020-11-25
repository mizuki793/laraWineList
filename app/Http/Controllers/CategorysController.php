<?php

namespace App\Http\Controllers;

use App\Models\WineCategory;
use Illuminate\Http\Request;

class CategorysController extends Controller
{
    public function create()
    {
        $categorys = WineCategory::all()->sortByDesc("id");
        return view('categorys.create',compact('categorys'));
    }

    public function store(Request $request)
    {
        WineCategory::create($request->all());
        return redirect()->route('categorys.create')->with('success','新規登録完了');
    }

    public function destroy($id)
    {
        WineCategory::where('cid',$id)->delete();
        return redirect()->route('categorys.create')->with('success','削除完了');
    }




}
