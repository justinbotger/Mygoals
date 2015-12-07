@extends('app')
@section('css')
    <link rel="stylesheet" href="css/setgoal.css">
@stop
@section('content')
    <div id="form_wrapper">

    {!! Form::open(['action' => 'GoalsController@store', 'method' => 'POST']) !!}
        <div id="form_field">
            {!! Form::label('title', 'Goal Title') !!}
            {!! Form::text('title') !!}
        </div>
        <div id="form_field">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description') !!}
        </div>
        <div id="form_field">
            {!! Form::label('category', 'Category') !!}
            {!! Form::select('category', array('artistic' => 'Artistic',
                                               'attitude' => 'Attitude',
                                               'career' => 'Career',
                                               'education' => 'Education',
                                               'family' => 'Family',
                                               'financial' => 'Financial',
                                               'physical' => 'Physical',
                                               'pubic_service' => 'Public Service',
                                               'travel' => 'Travel')); !!}
        </div>
        <div id="form_field">
            {!! Form::label('deadline', 'Deadline') !!}
            {!! Form::date('deadline') !!}
        </div>
            {!! Form::submit('Set Goal') !!}
            {!! Form::close() !!}
    </div>
@stop