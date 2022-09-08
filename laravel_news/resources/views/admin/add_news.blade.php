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
        <td>{!! Form::text('headline', '', ['class' => 'form-control', 'placeholder'=>'Enter Headline']) !!}
        @error('headline')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </td>
        <th>Photo</th>
        <td>{!! Form::file('photo', ['class' => 'form-control']) !!}
        @error('photo')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </td>
    </tr>
    <tr>
        <th>Details</th>
        <td colspan="3">{!! Form::textarea('details', '', ['class' => 'form-control', 'placeholder'=>'Enter Details Here']) !!}
        @error('details')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </td>
    </tr>
    <tr>
        <th>Category</th>
        <td>{!! Form::select('category_id', $cat, '', ['class' => 'form-control']) !!}
        </td>
        <td colspan="2">{!! Form::submit('Submit', ['class' => 'btn btn-block btn-primary']) !!}</td>
    </tr>
</table>
{!! Form::close() !!}

@stop
