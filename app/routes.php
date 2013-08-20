<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

<<<<<<< HEAD



Route::get('/', function()
{
	return View::make('home.home');;

});

Route::get('Reservation',function()
{	$data=BusRoute::all();	

	if(Session::has('Search')){
		$dat=Session::get('test');
		$isFound=true;
		$id2;
		$id=BusRoute::where('departure_date','=',$dat['searchDate'])
		->where('going_to','=',$dat['searchGoingTo'])
		->where('leaving_from','=',$dat['LeavingFrom'])
		->get();

       //$id2=Bus::find();
		foreach ($id as $each) {
			$id2=$each->busid;
		
		}

				
		if($id->count()<=0){
		$isFound=false;
		}
		else{
				$id=DB::table('buses')
				->join('bus_routes','bus_routes.busid','=','buses.busid')
				->where('buses.busid','=',$id2)
				->get();
				

		}

				


	    return View::make('Reservation.reservation',array('Routes'=>$data,'Search'=>true,'results'=>$id,'isFound'=>$isFound));
	}
		
		return View::make('Reservation.reservation',array('Routes'=>$data,'Search'=>false));
	});
=======
Route::get('/', function()
{
	return View::make('home.home');
});

Route::get('Reservation',function()
{
	return View::make('Reservation.reservation');
});
>>>>>>> 68e73d9c135d506b4132806aa724a99149109e76

Route::get('Registration',function(){

	return View::make('Registration.registration');
});



<<<<<<< HEAD
Route::post('Routes/search',array('before'=>'csrf','uses'=>'ReservationController@postSearch'));
Route::post('Routes/Reserve',array('before'=>'csrf','uses'=>'ReservationController@postReserve'));
Route::post('Register',array('before'=>'csrf','uses'=>'HomeController@NewUser'));
Route::post('login',array('before'=>'csrf','uses'=>'HomeController@login'));


/*ADMIN*/

Route::get('admin/login',function(){
return View::make('admin.login');
});
Route::get('admin/page',function(){//viewing
return View::make('admin.page');
});
Route::get('admin/addbus',function(){
return View::make('admin.addbus');
});
Route::get('admin/addgenreport',function(){
return View::make('admin.reportbus');
});


Route::post('admin/login',function(){
	$rules=array('Email'=>'Required','password'=>'Required');
	$user=array('Email'=>Input::get('Email'),'password'=>Input::get('Password'));

	$validation=Validator::make($user,$rules);
	
		if($validation->passes()){
				if(Auth::attempt($user)){
					if(Auth::user()->Account_type=='A'){
						return Redirect::to('admin/page');
						}
				return Redirect::back()->with(array('Accnot_found'=>1));
				}
				return Redirect::back()->with(array('Accnot_found'=>1));
		}	
	
		return Redirect::back()
				->withErrors($validation);
	});

/*Addimg Bus*/
Route::post('Admin/AddBus',array('before'=>'csrf','uses'=>'AdminController@postAddBus'));
=======
Route::post('Register',array('before'=>'csrf','uses'=>'HomeController@NewUser'));
Route::post('login',array('before'=>'csrf','uses'=>'HomeController@login'));
>>>>>>> 68e73d9c135d506b4132806aa724a99149109e76
