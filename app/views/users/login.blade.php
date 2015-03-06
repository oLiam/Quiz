@extends('layouts.master')


{{ Form::open(array('url'=>'users/signin')) }}
    <h2>Login</h2>

    {{ Form::text('text', null, array('placeholder' =>  'Username')) }}
    {{ Form::password('password', null, array('placeholder' => 'Password')) }}

    {{ Form::submit('Login') }}

{{ Form::close() }}