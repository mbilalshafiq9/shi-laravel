<?php namespace App\Http\Controllers;

class TeamController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(){
		return view('welcome');
	}

	public function elias_det(){
		return view('team-details/elias');
	}

	public function jason_det(){
		return view('team-details/jason');
	}

	public function isaiah_det(){
		return view('team-details/isaiah');
	}

	public function imad_det(){
		return view('team-details/imad');
	}

	public function rahul_det(){
		return view('team-details/rahul');
	}

	public function charles_det(){
		return view('team-details/charles');
	}

	public function mir_det(){
		return view('team-details/mir');
	}

	public function kazi_det(){
		return view('team-details/kazi');
	}
}
