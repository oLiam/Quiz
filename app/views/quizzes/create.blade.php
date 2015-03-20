@extends('layouts.master')

@section('navbar')
@parent
@stop

@section('content')
@parent

    {{ Form::open(array('url'=>'quizzes/create', 'class' => 'createquiz')) }}
        <h2>Create a Quiz now!</h2>
        <p>Quiz Name</p>{{ Form::text('quizname', null, array('required')) }}
        <p>Question 1</p>{{ Form::text('quizname', null, array('placeholder' => 'Question 1', 'size' => '40')) }}
        <p>Question 2</p>{{ Form::text('quizname', null, array('placeholder' => 'Question 2', 'size' => '40')) }}
        <p>Question 3</p>{{ Form::text('quizname', null, array('placeholder' => 'Question 3', 'size' => '40')) }}
        <p>Question 4</p>{{ Form::text('quizname', null, array('placeholder' => 'Question 4', 'size' => '40')) }}
        <br>
        <br>
        {{ Form::button('Add Question') }}
        {{ Form::submit('Create') }}
    {{ Form::close() }}

@stop