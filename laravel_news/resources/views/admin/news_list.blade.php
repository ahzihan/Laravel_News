@extends('layouts.admin_layout')

@section('title')
News List
@stop
@section('task')
News List
@stop
@section('main_content')
<table class="table table-striped table-hover">
  <tr>
    <th>Title</th>
    <th>Category</th>
    <th>Description</th>
    <th>Date</th>
    <th>Action</th>
  </tr>
  @forelse($data as $d)
  <tr>
    <td>{{ $d->headline }}</td>
    <td>{{ $d->category->category_name }}</td>
    <td>{{ $d->details }}</td>
    <td>{{ $d->created_at }}</td>
    <td>
        <button class="btn btn-sm btn-primary">edit</button> | 
        <button class="btn btn-sm btn-danger">delete</button>
    </td>
  </tr>
  @empty
  <tr>
    <th class="text-center" colspan="5">No Item Found !</th>
  </tr>     
  @endforelse
            
</table>
@stop
