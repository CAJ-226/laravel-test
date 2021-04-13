@extends('layouts/layout')

@section('title', 'List of Tasks')

@section('main')
	<a href="/">Sort by ID</a>
	<div class="task-list">
		@foreach($tasks as $task)
		<div class="card">
			<div class="card-content">
				<div class="content">
					<h3>{{ $task->title }}</h3>
				</div>
			</div>
			<div class="card-footer">
				<a href="/task/{{ $task->id }}" class="card-footer-item">Show task ></a>
			</div>
		</div>
		@endforeach
	</div>
@endsection
