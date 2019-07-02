@if(session('success'))
    <div class="alert alert-success mt-1 text-center">
        {{session('success')}}
    </div>
@endif

@if(session('deleted'))
    <div class="alert alert-danger mt-1 text-center">
        {{session('deleted')}}
    </div>
@endif






