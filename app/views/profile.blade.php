@extends('layouts.default')

@section('content')
    <div class="panel">
        <p>Welcome, your email address is {{ Auth::user()->email }}</p>
    </div>
@stop