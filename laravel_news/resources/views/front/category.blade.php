@extends('front.layout')
@section('title')
Amader Somoy | {{ $list->category_name }}
@stop

@section('cat_name')
<h2>{{ $list->category_name }}</h2>
@stop

@section('content')
@forelse($list->news as $n)
<div class="col">
    <div class="card h-100">
      <img src="{{ asset('uploads/'.$n->photo) }}" class="card-img-top" alt="Image">
      <div class="card-body">
        <a href="{{url('/details/'.$n->id)}}"><h5 class="card-title">{{ $n->headline }}</h5></a>
        <p class="card-text">{{ \Illuminate\Support\Str::limit($n->details,150,$end='...') }}</p>
        <a class="btn btn-sm btn-primary" href="{{url('/details/'.$n->id)}}">Read More</a>
      </div>
    </div>
</div>
@empty
<div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title text-center">Item not found!</h5>
      </div>
    </div>
</div>    
@endforelse
@stop