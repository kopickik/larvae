@extends('layouts.default')

@section('content')
    <div class="panel">
        <p>Welcome, {{ Auth::user()->username }}!</p>
        <p>Your email address: {{ Auth::user()->email }}.</p>
    </div>
@stop