@extends('layouts.app');

@section('content')

<h1 class="text-center my-5">Todo</h1>

<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card card-default">
			<div class="card-header">
				Todo
			</div>

		<div class="card-body">
			<ul class="list-group">
			@foreach($todos as $todo)
			<li class="list-group-item">
				{{$todo->list}}
				@if(!$todo->completed)
				<a href="todo/{{$todo->id}}/complete" class="btn btn-success btn-sm float-right">Complete</a>
				@endif
				<a href="todo/{{$todo->id}}" class="btn btn-primary btn-sm float-right mr-2">Show</a>

			</li>
			@endforeach
			</ul>
			<div class="text-center">
				{{$todos->links()}}
			</div>
			
		</div>
		</div>

	</div>
</div>
@endsection