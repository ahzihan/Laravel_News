<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=News::orderBy('created_at','desc')->get();
        return view('admin.news_list',compact('data'));
    }

    public function create()
    {
        $category=Category::all();
        $cat=array();
        foreach($category as $key => $value){
            $cat[$value->id]=$value->category_name;
        }
        return view('admin.add_news',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'headline'=>'required | max:255',
            'details'=>'required',
            'category_id'=>'required'
        ]);
        $file=$request->file('photo');
        $photo=time().'_'.$file->getClientOriginalName();
        $file->move('uploads',$photo);
        $d=array(
            'headline'=>$request->headline,
            'details'=>$request->details,
            'category_id'=>$request->category_id,
            'photo'=>$photo
        );
        News::create($d);
        return redirect('/news')->with('success','News Inserted Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
