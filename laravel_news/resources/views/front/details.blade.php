@extends('front.layout')
@section('title')
Amader Somoy | {{ $list->headline }}
@stop

@section('cat_name')
<h2>{{ $list->category->category_name }}</h2>
@stop


@section('content')
<div class="card mb-3 w-100">
  <img src="{{ asset('uploads/'.$list->photo) }}" class="card-img-top" alt="Image">
  <div class="card-body">
    <h5 class="card-title">{{ $list->headline }}</h5>
    <p><small>{{ $list->created_at }}</small></p>
    <p class="card-text">{{ $list->details }}</p>
  </div>
</div>
@stop