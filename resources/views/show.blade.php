@extends('layouts/layout')

@section('title', 'Detail of Task')

@section('main')
	<h1 class="title">{{$title}}</h1>
	<div class="description">{{$description}}</div>
	<br/>
	<div class="completed">Task status: {{$message}}</div>
	<br/>
	<div class="date">Created at: {{$date}}</div>
	<br/>
	<a class="cancel" href="/task/{{$task_id}}/delete">&#62; Delet current task</a>
	<br/>
	<a class="back" href="/">&#62; Back to home</a>
@endsection
