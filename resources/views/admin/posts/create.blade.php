<?php
/**
 * User: Leonardo
 * Date: 26/10/2016
 * Time: 18:52
 */
?>
@extends('template')
@section('content')

    @if($errors->any())

        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif


    <h1>Create new Post</h1>
    <br>
    {!! Form::open(['route' => 'admin.posts.store', 'method'=>'post']) !!}

    @include('admin.posts._form')

    <!-- Form Input -->

    <div class="form-group">
        {!! Form::label('tags', 'Tags:', ['class'=>'control-label']) !!}
        {!! Form::textarea('tags', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}



@endsection

