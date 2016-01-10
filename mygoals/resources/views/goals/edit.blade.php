@extends('app')
@section('css')
    <link rel="stylesheet" href="/css/setgoal.css">
@stop
@section('content')
    <div id="form_wrapper">
        @include('includes.errors')
        {!! Form::model($goal, ['action' => ['GoalsController@update', $goal->id], 'method' => 'PATCH']) !!}
        @include('includes.goalform')
        {!! Form::close() !!}
    </div>
@stop