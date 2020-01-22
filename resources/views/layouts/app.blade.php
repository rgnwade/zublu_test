<!doctype html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
  <script src="{{url('js/jquery.min.js')}}"></script>
  <script src="{{url('js/popper.min.js')}}"></script>
  <script src="{{url('js/bootstrap.min.js')}}"></script>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  <title>Test Zublu</title>

  <link rel="stylesheet" href="{{ url('css/main.css') }}">

 

</head>

<body>
    
        @include('layouts/inc/header')

        @yield('content')

        @include('layouts/inc/footer')

</body>

<script type="text/javascript">

$('.date').datepicker({  

   format: 'mm-dd-yyyy'

 });  

 function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

$(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});
</script>  



<script src="{{ url('js//main.js') }}"></script>

<script type="text/javascript" src="{{url('js/carousel/jquery.min.js')}}"></script>

</html>
