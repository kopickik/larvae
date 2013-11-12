@extends('layouts.default')

@section('content')

<h1>Login</h1>


{{ Form::open(array('route' => 'sessions.store')) }}
    <ul>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>{{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}</li>

        <li>
            {{ Form::submit() }}
        </li>
    </ul>
{{ Form::close() }}
@stop

<!-- here's an example LI query: authToken=jgjI&id=51390252&fromEmail=&trk=eml-comm_invm-b-profile-newinvite&ut=2SzdHmGE6f1m01&invAcpt=34379629_I178109351_30&authType=name -->
