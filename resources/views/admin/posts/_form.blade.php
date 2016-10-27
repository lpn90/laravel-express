<?php
/**
 * User: Leonardo
 * Date: 26/10/2016
 * Time: 19:45
 */
?>

<!-- Title Form Input -->

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class'=>'control-label']) !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<!-- Form Input -->

<div class="form-group">
    {!! Form::label('content', 'Content:', ['class'=>'control-label']) !!}
    {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
</div>

