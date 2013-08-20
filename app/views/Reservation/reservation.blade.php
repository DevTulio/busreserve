@extends('template.default')

@section('content')


<div class="row-fluid">
@if(Session::has('Search'))
		@if(!$isFound)	
			<div class="row-fluid">
	<div class="page-header">
			<h3>Search For Departure date {{Session::get('test')['searchDate']}} Not Found</h3>
	</div>
			</div>
		@endif
@endif
	<div class="span12">
	
		

				@if(Auth::check())
					 	{{Form::open(array('url'=>URL::to('Routes/search'),'class'=>'form-inline','method'=>'POST'))}}
					 		{{Form::token()}}
						<div class="control-label">							
								<b>Search Departure Date</b>
						</div>
						<div class="row-fluid">
							<div class="control-group" style="padding:12px">								
								 <div class="span4">
								 	 <input name="DepartureDate" id="appendedInputButton" type="date">									
								 </div>													
							</div>
						</div>
						<div class="row-fluid">
							<div class="control-group" style="padding:12px">
								<div class="span4">
									
									<select name="LeavingFrom">
											@foreach($Routes as $route)
												<option>{{$route->leaving_from}}</option>
											@endforeach							
											
											
									</select>								
								</div>							
							</div>
						</div>
						<div class="row-fluid">
							<div class="control-group" style="padding:12px">
								<div class="span4">
									<select name="GoingTo">
											@foreach($Routes as $route)
												<option>{{$route->going_to}}</option>
											@endforeach

									</select>										
								</div>							
							</div>
						</div>
						 <div class="row-fluid">
						 	<div class="control-group" style="padding:12px">
						 		 <button class="btn btn-primary" >Search</button>
						 	</div>
						 </div>
						{{Form::close()}}

								@if(Session::has('Search') && $isFound)

							<table width="100px" class="table table-bordered">
				              <thead>
				                <tr>
				                  <th width="25%">Bus Type</th>
				                  <th width="25%">Departure Time</th>
				                  <th width="25%">Available Seats</th>
				                  <th width="25%">Fare</th>
				                </tr>
				              </thead>
				              <tbody>

				              			
				             		@foreach($results as $result)
				             			
				             		
				             		               	
				                <tr>
				                  <td>{{$result->bustype}}</td>
				                  <td>{{$result->departure_time}}</td>
				                  <td>{{$result->availableseats}}</td>
				                  <td>
				                  <div class="row-fluid">
				                  {{$result->amount}}
				                  </div>

				                  <a href="#myModal{{$result->busid}}" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

				                <div id="myModal{{$result->busid}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
					            <div class="modal-header">
					              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					              <h3 id="myModalLabel">Bus Reservation</h3>
					            </div>
					            <div class="modal-body">
					              <h4>Choose Seats</h4>
					            
				                         {{Form::open(array('url'=>URL::to('Routes/Reserve'),'class'=>'form-inline','method'=>'POST'))}}
		                  				 {{Form::token()}}
		                  				 <input type="hidden" name="busid" value="{{$result->busid}}">

		                  		 @foreach(DB::table('seats')->where('busid','=',$result->busid)->get() as $each)
		                   			{{--*/$a=count(DB::table('seats')->where('busid','=',$result->busid)->get());/*--}}
										@if(count(DB::table('bus_reservations')->where('seatno','=',$each->seatno)->get())<=0)
					         
					       			 <input type="checkbox"  style="padding:10px" name="seats[]" value="{{$each->seatno}}">&nbsp;<img class="available"></img>
					        
					              	 @else
					              	 		@foreach(DB::table('bus_reservations')->where('seatno','=',$each->seatno)->get() as $each2)
					                    @if($each2->status=='RESERVED'||$each2->status=='PAID')
					        		 <input type="checkbox"  style="padding:10px" disabled="" value="{{$each->seatno}}">&nbsp;</img><img class="booked"></img>
					              	 	@endif
					              	 		@endforeach
					              	 @endif
					              @endforeach
					              <div class="row-fluid">
					             <br><br>
					              	<button class="btn btn-primary">Submit<button>
					              </div>
					              {{Form::close()}}
					   
					              
					            <div class="modal-footer">
					              <button class="btn" data-dismiss="modal">Close</button>
					              <button class="btn btn-primary">Save changes</button>
					            </div>
					          </div>
				                  </td>
				                </tr>
				         		   @endforeach
				            


				               
				              </tbody>
				            </table>

				           
				            
				           

						@endif
						

				@elseif(!(Auth::check()))

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