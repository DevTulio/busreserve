<html>
<head>

	<title></title>
<<<<<<< HEAD
	{{HTML::style('assets/bootstrap/css/bootstrap.min.css')}}
	{{HTML::style('assets/bootstrap/css/bootstrap-responsive.css')}}
	{{HTML::style('assets/css/flat-ui.css')}}
	{{HTML::style('assets/datepicker/css/datepicker.css')}}
	{{HTML::style('assets/css/img.css')}}
=======
	{{HTML::style('assets/bootstrap/css/bootstrap.css')}}
	{{HTML::style('assets/bootstrap/css/bootstrap-responsive.css')}}
	{{HTML::style('assets/css/flat-ui.css')}}
	{{HTML::style('assets/datepicker/css/datepicker.css')}}

>>>>>>> 68e73d9c135d506b4132806aa724a99149109e76

</head>
<body style="background:#BBC1C4;padding-top:27px">

	<div class="row-fluid">
		<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					
						

							<div class="container">
								<div class="span2">

								</div>

								<div class="span8">
									<ul class="nav">
									<li><a href="{{URL('/')}}">Home</a></li>
									<li><a href="">Schedules</a></li>
									<li><a href="{{URL('Reservation')}}">Reservation</a></li>									
									<li><a href="">Blog</a></li>
									<li><a href="">About us</a></li>
									</ul>
								</div>

								<div class="span2">


								</div>
							</div>



					
				</div>
		</div>
		<br><br>
	</div>
	
	<div class="row-fluid">
		<div class="container-fluid">
			
			<div class="span3">
				<div class="well">

				</div>
			</div>
					
			<div class="span9">
				<div class="well">

							@yield('content')
						
				</div>
			</div>

				
			
		</div>
	</div>

	<div class="row-fluid">
		<div class="navbar navbar-inverse navbar-fixed-bottom">

				
					<div class="navbar-inner">
							<div class="container">
						<ul class="nav">
							<li><a href="">&copy; Coded By Dev Tulio</a>
							</li>
						</ul>
							</div>
					</div>	

		</div>

	</div>
</div>
<<<<<<< HEAD
{{HTML::script('assets/js/jquery.js')}}
{{HTML::script('assets/datepicker/js/datepicker.js')}}
{{HTML::script('assets/datepicker/js/date.js')}}
{{HTML::script('assets/js/bootstrap.min.js')}}
=======
{{HTML::script('assets/datepicker/js/jquery.js')}}
{{HTML::script('assets/datepicker/js/datepicker.js')}}
{{HTML::script('assets/datepicker/js/date.js')}}
>>>>>>> 68e73d9c135d506b4132806aa724a99149109e76
</body>
</html>