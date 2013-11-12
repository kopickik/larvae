@extends('layouts.default')

@section('content')

<h1>{{ $task->title }}</h1>
<p>{{ $task->body }}</p>

<p>{{ link_to("tasks", "Go Back") }}</p>

@stop