<?php namespace App\Controllers;

class Realtime extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
		echo view('head');
		echo view('header');
		echo view('content_realtime');
		echo view('footer');
	}

	//--------------------------------------------------------------------

}
