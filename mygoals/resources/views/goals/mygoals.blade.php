@extends('app')
@section('css')
    <link rel="stylesheet" href="css/mygoals.css">
@stop
@section('content')
    @if($goals->count())
        <div id="goals">
            @foreach($goals as $goal)
                <div id="goal">
                    <h1>{{ $goal->title }}</h1>
                    <p>{{ $goal->description }}</p>
                    <div id="progress_wrapper">
                        <div id="progress">{{ $goal->progress }}%</div>
                        <progress value="{{ $goal->progress }}" max="100"></progress>
                    </div>
                    <div id="deadline_wrapper">
                        <div id="deadline_label">Deadline:</div>
                        <div id="deadline">{{ $goal->deadline }}</div>
                    </div>
                    <div id="category">
                        <img src="images/categories/{{ $goal->category }}.png" alt="{{ $goal->category }}">
                        <div id="category_name">{{ $goal->category }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@stop