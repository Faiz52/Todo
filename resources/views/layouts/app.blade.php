<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('todo.index')}}">Todo</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('todo.create')}}">Create Todo</a>
      </li>
  </div>
</nav>
<div class="container">
		@yield('content')
</div>


</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
  $(document).ready(function(){

    $('#delete').click(function(){
      if(!confirm('Do you want to delete')){
        return false;
      }
    });

/*    $('#options').click(function(){

      if(this.checked)
      {
        $('.checkBox').each(function(){

          this.checked = true;
        })
      }
        else
        {
          $('.checkBox').each(function(){

          this.checked = false;

        })
      }
    })*/


  });


</script>
</html>