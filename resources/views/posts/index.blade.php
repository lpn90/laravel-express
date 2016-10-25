<?php
/**
 * User: Leonardo
 * Date: 25/10/2016
 * Time: 16:00
 */
?>
@extends('template')
@section('content')
    <h1>Blog</h1>

    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2> <i>{{$post->created_at}}</i>
        <p>{{ $post->content }}</p>
        <hr>
    @endforeach
@endsection
