@extends('layouts.app');

@section('content')

@include('layouts.errors')

<h1 class="text-center my-5">Create Todo</h1>

<div class="row justify-content-center">
	<div class="col-md-8">
			<form action="{{route('todo.store')}}" method="POST">
				@csrf
				<div class="form-group">
					<label for="List"><h3>List</h3></label>
					<input type="text" name="list" class="form-control" value="{{old('list')}}">
				</div>
				<div class="form-group">
					<label for="description"><h3>Description</h3></label>
					<textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
				</div>
				<input type="submit" name="submit" value="Create Todo" class="btn btn-primary">
			</form>


	</div>
</div>
@endsection