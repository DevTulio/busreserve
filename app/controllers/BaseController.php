<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	function __construct(){
		$currentDate=date_create(date('Y-m-d H:i:s'));
		$busReserve=DB::table('buses')
		->join('bus_reservations','bus_reservations.busid','=','buses.busid')
		->where('bus_reservations.status','=','RESERVED')
		->get();



		foreach ($busReserve as $busesDate) {
			$date=date_diff($currentDate,date_create($busesDate->created_at));
			
			if($date->format('%d')>1){
				DB::table('bus_reservations')->where('busid',$busesDate->busid)			
				->update(array('status'=>'CANCEL'));

				DB::table('cancels')->insert(array('busid'=>$busesDate->busid,
					'time'=>$currentDate,
					'seatno'=>$busesDate->seatno,
					'user_id'=>$busesDate->user_id,
					'ticketno'=>$busesDate->ticketno,
					'reason'=>'EXPIRED'
					));
				DB::table('buses')->where('busid',$busesDate->busid)
				->update(array('availableseats'=>$busesDate->availableseats+1));

			}
		}


	}
	protected function setupLayout(){
	//	$this->__construct();

		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}



}