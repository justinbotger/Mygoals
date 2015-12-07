@extends('app')
@section('content')
@if(!Auth::check())
    @include('includes.errors')
    @include('includes.login_form')
    @include('includes.register_form')
@endif
@stop