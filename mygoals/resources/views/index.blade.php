@extends('app')
@section('css')
    <link rel="stylesheet" href="css/index.css">
@stop
@section('content')
    @if($userGoals->count())
        <div id="post_update_header">
            <img src="images/profilepic.png" alt="">
            <h1>Let your friends know about your progress</h1>
        </div>
        <div id="post_update">
            @include('includes.errors')
                {!! Form::open(['action' => 'ProgressUpdateController@store']) !!}
            <div id="form_field">
                {!!  Form::label('choose_goal', 'Choose Goal') !!}
                <select name="goal_id" id="choose_goal">
                    @foreach($userGoals as $goal)
                        <option value="{{ $goal->id }}">{{ $goal->title }}</option>
                    @endforeach
                </select>
            </div>
            <div id="form_field">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title') !!}
            </div>
            <div id="form_field">
                {!! Form::label('body', 'Body') !!}
                {!! Form::textarea('body') !!}
            </div>
            <div id="form_field">
                {!! Form::label('added_progress', 'Added Progress') !!}
                {!! Form::number('added_progress') !!}
            </div>
            <div id="button">
                {!! Form::submit('Post Progress Update') !!}
            </div>
                {!! Form::close() !!}
        </div>
    @else
        <div id="no_goals">
            <h1>You don't have any goals yet. <a href="/setgoals">Set your first goal</a></h1>
        </div>
    @endif
    <div id="updates">
        @foreach($updates as $update)
            <div id="update">
                <div id="update_header">
                    <div id="update_header_left">
                        <img src="images/profilepic.png" alt="">
                    </div>
                    <div id="update_header_right">
                        <h1>{{ $update->goal->title }}</h1>
                        <div id="name">{{ $update->user->name }}</div>
                    </div>
                </div>
                <div id="progress">
                    <div id="added_progress">+{{ $update->added_progress }}%</div>
                    <progress value="{{ $update->goal->progress }}" max="100"></progress>
                </div>
                <div id="update_post">
                    <h1>{{ $update->title }}</h1>
                    <p>{{ $update->body }}</p>
                </div>
                <div id="created_at">
                    Posted at: {{ $update->created_at }}
                </div>
            </div>
            <div class="comments">
                <div class="make_comment">
                    {!! Form::open(['action' => 'CommentController@store']) !!}
                    {!! Form::hidden('progress_update_id', $update->id) !!}
                    {!! Form::textarea('comment') !!}
                    {!! Form::submit('Post Comment', ['class' => 'submit']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="encouragements">
                    {!! Form::open(['action' => 'EncouragementController@store']) !!}
                    {!! Form::hidden('progress_update_id', $update->id) !!}
                    <button type="submit" class="submit">
                        <img class="encourage_icon" src="images/buttons/encourage.png" alt="Encourage">
                        <span class="encourage_text">Encourage</span>
                    </button>
                    {!! Form::close() !!}
                    <div class="encourages_amount">
                        <span>
                            {{ $update->encouragement->count() }} people
                        </span>
                        are encouraging this
                    </div>
                </div>
                @if($update->comment->count())
                    @foreach($update->comment as $comment)
                        <div class="comment">
                            <img src="images/profilepic.png" alt="">
                            <div class="name">{{ $comment->user->name }}</div>
                            <div class="body">{{ $comment->comment }}</div>
                        </div>
                    @endforeach
                @else
                    <div class="comment">
                        <div class="body">There are no comments</div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
@stop