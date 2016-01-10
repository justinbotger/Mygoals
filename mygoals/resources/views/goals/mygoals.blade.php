@extends('app')
@section('css')
    <link rel="stylesheet" href="css/mygoals.css">
@stop
@section('content')
    @if($goals->count())
        <div id="goals">
            @foreach($goals as $goal)
                <div id="goal">
                    <div id="top">
                        <h1>{{ $goal->title }}</h1>
                        <p>{{ $goal->description }}</p>
                        <div id="category">
                            <img src="images/categories/{{ $goal->category }}.png" alt="{{ $goal->category }}">
                            <div id="category_name">{{ $goal->category }}</div>
                        </div>
                        <div id="progress_wrapper">
                            <div id="progress">{{ $goal->progress }}%</div>
                            <progress value="{{ $goal->progress }}" max="100"></progress>
                        </div>
                        <div id="time_wrapper">
                            <div id="deadline_label">Deadline:</div>
                            <div id="deadline">{{ $goal->deadline }}</div>
                            <div id="created_at_label">Created at:</div>
                            <div id="created_at">{{ $goal->created_at }}</div>
                        </div>
                    </div>
                    <div id="buttons">
                        {!! Form::open(['url' => 'removegoal/'.$goal->id, 'method' => 'post']) !!}
                        {!! csrf_field() !!}
                        {!! method_field('DELETE') !!}
                        <button id="remove">Remove goal</button>
                        {!! Form::close() !!}
                        {!! Form::open(['url' => 'editgoal/'.$goal->id, 'method' => 'get']) !!}
                        {!! Form::submit('Edit goal', ['id' => 'edit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@stop