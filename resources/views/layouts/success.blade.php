@if(session('success'))
    <div class="alert alert-success mt-1">
        {{session('success')}}
    </div>
@endif

@if(session('deleted'))
    <div class="alert alert-danger mt-1">
        {{session('deleted')}}
    </div>
@endif






