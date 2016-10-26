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
    {!! Form::open(['route' => 'admin.posts.store', 'methode'=>'post']) !!}

    @include('admin.posts._form')

    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}



@endsection

