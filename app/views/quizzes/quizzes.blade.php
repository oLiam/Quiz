@extends('layouts.master')

@section('navbar')
@parent

@stop


@section('content')
@parent

<div id="quizlinks">
<li>{{ HTML::link('quizzes/create', 'Create Quiz', array('class' => 'quizcreate'))}}<li>
</div>


<p>
Quiz List:
</p>

<ul>
    @foreach ($quizzes as $quiz)
    <li id="quizlist"><a>{{ $quiz->id,' ',$quiz->quizname }}</a></li>
    @endforeach
</ul>


@stop