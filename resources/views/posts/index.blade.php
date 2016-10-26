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
        <h2>{{ $post->title }}</h2>
        <b>Create:</b> <i>{{$post->created_at}}</i>
        <p>{{ $post->content }}</p>

        <b>Tags: </b><br>
        <ul>
            @foreach($post->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>

        <h3>Comments</h3>
        @foreach($post->comments as $comment)
            <b>Nome: </b> {{ $comment->name }} <br>
            <b>Comment: </b> {{ $comment->comment }}
        @endforeach
        <hr>

    @endforeach
@endsection
