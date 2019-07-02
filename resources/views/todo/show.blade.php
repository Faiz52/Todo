@extends('layouts.app');

@section('content')

<h1 class="text-center my-5">{{$todo->list}}</h1>

<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card card-default">
			
			<div class="card-header">
				{{$todo->list}}
			</div>

			<div class="card-body">
				{{$todo->description}}
			</div>

		</div>
		<a href="/todo/{{$todo->id}}/edit" class="btn btn-primary btn-block btn-sm">Edit</a>
		<form action="{{route('todo.destroy' , $todo->id)}}" method="POST">
			@csrf
			{{method_field('DELETE')}}
			<input type="submit" name="delete" id="delete" value="Delete Todo" class="btn btn-danger btn-block btn-sm mt-1">
		</form>
	</div>
</div>

@endsection