@extends('app')
@section('css')
    <link rel="stylesheet" href="css/setgoal.css">
@stop
@section('content')
    <div id="post_goal_header">
        <img src="images/profilepic.png" alt="">
        <h1>Set a new goal</h1>
    </div>
    <div id="form_wrapper">
        @include('includes.errors')
        {!! Form::open(['action' => 'GoalsController@store', 'method' => 'POST']) !!}
        @include('includes.goalform')
        {!! Form::close() !!}
    </div>
@stop