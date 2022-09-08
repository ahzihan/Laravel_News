<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $category=Category::all();
        $news=News::orderBy('created_at','desc')->get();
        return view('front.index',compact('category','news'));
    }
    public function category($id){
        $category=Category::all();
        $list=Category::find($id);
        return view('front.category',compact('category','list'));
    }
    public function details($id){
        $category=Category::all();
        $list=News::find($id);
        return view('front.details',compact('category','list'));
    }
}
