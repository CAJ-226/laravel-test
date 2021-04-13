@extends('layouts/layout')

@section('title', 'Detail of Task')

@section('main')
	<h1 class="title">Empty task</h1>
	<div class="description">The task {{$task_id}} that you search doesn't exist yet!</div>
	<br/>
	<a class="back" href="/">&#62; Back to home</a>
@endsection
