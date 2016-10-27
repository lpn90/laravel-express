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


    <h1>Edit Post: {{ $post->title }}</h1>
    <br>
    {!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method'=>'put']) !!}

    @include('admin.posts._form')

    <div class="form-group">
        {!! Form::label('tags', 'Tags:', ['class'=>'control-label']) !!}
        {!! Form::textarea('tags', $post->tagList, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}



@endsection

