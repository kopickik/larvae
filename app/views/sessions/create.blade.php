@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-sm-12">
    <h1>Login</h1>
    </div>

{{ Form::open(array('route' => 'sessions.store')) }}
<form role="form">
    <div class="form-group">
        <div class="col-sm-6">
        {{ Form::label('email', 'Email:', array(
            'class' => 'sr-only'
        )) }}
        {{ Form::text('email', null, array(
            'class' => 'form-control',
            'placeholder' => 'P&A Code'
        )) }}
        <p class="help-block">Enter your P&amp;A Code in the Username field.</p>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-6">
        {{ Form::label('password', 'Password:', array(
            'class' => 'sr-only'
        )) }}
        {{ Form::password('password', array(
            'class' => 'form-control',
            'placeholder' => 'Password'
        )) }}
        <p class="help-block">Enter your sales code in the password field.</p>
        </div>
    </div>
    <div class="col-sm-6">
    {{ Form::submit('Submit', array(
        'class' => 'btn btn-default'
    )) }}
    </div>
</form>
    
{{ Form::close() }}

</div>
@stop

<!-- here's an example LI query: authToken=jgjI&id=51390252&fromEmail=&trk=eml-comm_invm-b-profile-newinvite&ut=2SzdHmGE6f1m01&invAcpt=34379629_I178109351_30&authType=name -->
