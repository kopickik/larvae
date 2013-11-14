@extends('layouts.default')

@section('topmenu')

@stop

@section('content')
    <p>Home page!!</p>
    @if(Auth::user())
    <button class="btn btn-default">{{link_to('profile', 'My Profile')}}</button>
    <button class="btn btn-default">{{link_to('logout', 'Logout')}}</button>
    @else
    <p>{{link_to('login', 'Log In')}}</p>
    @endif
@stop