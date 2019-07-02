@extends('layouts.app')

@section('content')

@include('layouts.errors')

@include('layouts.success')

<h1 class="text-center my-5">Edit Todo</h1>

<div class="row justify-content-center">
	<div class="col-md-12">
			<form action="{{route('todo.update' , $todo->id)}}" method="POST">
				@csrf
				{{method_field('PATCH')}}
				<div class="form-group">
					<label for="List"><h3>List</h3></label>
					<input type="text" name="list" class="form-control" value="{{$todo->list}}">
				</div>
				<div class="form-group">
					<label for="description"><h3>Description</h3></label>
					<textarea name="description" id="" cols="30" rows="10" class="form-control">{{$todo->description}}</textarea>
				</div>
				<input type="submit" name="submit" value="Update Todo" class="btn btn-primary">
			</form>


	</div>
</div>
@endsection