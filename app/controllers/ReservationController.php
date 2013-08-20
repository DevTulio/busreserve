<?php

class ReservationController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{



	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function postSearch(){
		$searchDate=Input::get('DepartureDate');
		$searchGoingTo=Input::get('GoingTo');
		$searchLeavingFrom=Input::get('LeavingFrom');
		

		$searchDate=date("Y-m-d", strtotime($searchDate));
		$data['searchDate']=$searchDate;
		$data['searchGoingTo']=$searchGoingTo;
		$data['LeavingFrom']=$searchLeavingFrom;
		Session::put('test',$data);
				
		return Redirect::to('Reservation')
		->with(array('results'=>$data,'Search'=>true));

	
	}

		public function postReserve(){
			$reserveSeats=Input::get('seats');			
			$busid=Input::get('busid');

			foreach ($reserveSeats as $seat) {
				$BusReserve= new BusReservations;
				$BusReserve->busid=$busid;
				$BusReserve->seatno=$seat;
				$BusReserve->user_id=Auth::user()->user_id;
				$BusReserve->status="RESERVED";
				$BusReserve->save();


				

			}
		}

}