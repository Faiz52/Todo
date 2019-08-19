@extends('layouts.app')

@section('content')

@include('layouts.success')

<h1 class="text-center my-4">Todo</h1>
<div class="col-lg-12 my-4">
    <form action="{{route('todo.search')}}" method="GET">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Tag" name="query">
            <div class="input-group-btn">
              <button class="btn btn-danger" type="submit">
                Search
              </button>
            </div>
          </div>
    </form>
</div>
<div class="row justify-content-center">
	<div class="col-md-12">
		<div class="card card-default">
			<div class="card-header text-center">
				Todo
			</div>

		<div class="card-body">
			<ul class="list-group">
<!-- 				<input type="checkbox" id="options"> -->
			@foreach($todos as $todo)
			<li class="list-group-item">
<!-- 				<input type="checkbox" class="checkBox" name="checkboxArray[]" value="{{$todo->id}}">
				 -->	<a style="text-decoration: none;" href="todo/{{$todo->id}}">{{$todo->list}}</a>
				@if(!$todo->completed)
				<a href="todo/{{$todo->id}}/complete" class="btn btn-primary btn-sm float-right">Complete</a>
				@endif
				<a href="todo/{{$todo->id}}" class="btn btn-success btn-sm float-right mr-2">Show</a>


			</li>
			@endforeach
			</ul>

			
		</div>
					<div>
				{{$todos->appends(['query' => request()->query('query')])->links()}}
			</div>
		</div>

	</div>
</div>

@endsection