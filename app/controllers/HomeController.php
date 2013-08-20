<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function NewUser()
	{
		$validation=User::validate(Input::all());

			if($validation->passes())
			{		

					User::create(array('Email'=>Input::get('Email'),
					'First_Name'=>strtoupper(Input::get('First_Name')),
					'Last_Name'=>strtoupper(Input::get('Last_Name')),
					'Password'=>Hash::make(Input::get('Password')),
					'Phone_Number'=>Input::get('Phone_Number'),
					'Mailing_Address'=>strtoupper(Input::get('Mailing_Address')),
					'Street_Address'=>strtoupper(Input::get('Street_Address'))
					));

					$data=array('url'=>'generate');
					Mail::send('emails.Registration.confirmation',$data,function($message){
					$message->to(Input::get('Email',Input::get('First_Name').' '.Input::get('Last_Name')))->subject('BusReservation-Registration');

					});
					

					
			}

			else
			{
				return Redirect::back()
				->withErrors($validation)
				->withInput();
			}

	}

public function login()
{

		$user=array('Email'=>Input::get('Email'),
			'password'=>Input::get('Password'));

		if(Auth::attempt($user))
<<<<<<< HEAD
		{			
			return Redirect::intended('Reservation');
			

=======
		{
			return View::make('Reservation.reservation');
>>>>>>> 68e73d9c135d506b4132806aa724a99149109e76
		}

		else
		{
			return Redirect::back()->withInput();
		}
}

public function logout()


{

	
}



}