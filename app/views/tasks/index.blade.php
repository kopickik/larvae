@extends('layouts.default')

@section('content')

<h1>All tasks</h1>
@foreach($tasks as $task)
    <ul class="list-group">
        <li class="list-group-item">{{ link_to("tasks/$task->id", $task->title) }} <small>{{$task->body}}</small></li>
    </ul>
@endforeach
@stop