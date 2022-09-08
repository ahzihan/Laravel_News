@extends('layouts.admin_layout')

@section('title')
Add News
@stop
@section('task')
Add News
@stop
@section('main_content')

{!! Form::open(['url' => 'news','files' => true]) !!}
    <table class="table table-striped table-hover">
    <tr>
        <th>Headline</th>
        <td>{!! Form::text('headline', '', ['class' => 'form-control', 'placeholder'=>'Enter Headline']) !!}</td>
        <th>Photo</th>
        <td>{!! Form::file('photo', ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <th>Details</th>
        <td colspan="3">{!! Form::textarea('details', '', ['class' => 'form-control', 'placeholder'=>'Enter Details Here']) !!}</td>
    </tr>
    <tr>
        <th>Category</th>
        <td>{!! Form::select('category_id', $cat, '', ['class' => 'form-control']) !!}</td>
        <td colspan="2">{!! Form::submit('Submit', ['class' => 'btn btn-block btn-primary']) !!}</td>
    </tr>
</table>
{!! Form::close() !!}

@stop
