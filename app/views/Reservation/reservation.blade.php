@extends('template.default')

@section('content')


<div class="row-fluid">

	<div class="span4">
	
			@if(Auth::check())
				<div class="row-fluid">
					<div class="control-label">
					Search Date of Arrival
					</div>
				</div>
				<div class="control-group">
				
					<div id="search" style="padding:15px"></div>

				</div>

			@else

				{{Form::open(array('url'=>'login','class'=>'form-inline','method'=>'POST'))}}
				{{Form::token()}}
					@if(Session::has('errormessage'))


					@endif
						<label class="control-label">Email</label>
						<div class="control-group">
							<input type="text" value="{{Input::old('Email')}}" placeholder="Email"  name="Email">				
						</div>
						<label class="control-label">Password</label>
						<div class="control-group">
							<input type="password" placeholder="Password" name="Password">				
						</div>

						<button class="btn btn-primary">Submit</button>
						<a href="{{URL('Registration')}}">Not yet Registered?</a>
				
					{{Form::close()}}
			@endif

			

	</div>

</div>


@stop