<?php
/**
 * User: Leonardo
 * Date: 21/10/2016
 * Time: 11:29
 */
?>

@extends('template')

@section('title')
    Minhas Anotações
@endsection

@section('content')
    <h1>Anotações</h1>

    <ul>
        @foreach($notas as $nota)
            <li> {{ $nota }} </li>
        @endforeach
    </ul>
@endsection