<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
		echo view('head');
		echo view('header');
		echo view('content_home');
		echo view('footer');
	}

	//--------------------------------------------------------------------

	public function history()
	{
		echo view('head');
		echo view('header');
		echo view('content_history');
		echo view('footer');
	}

	public function realtime()
	{
		echo view('head');
		echo view('header');
		echo view('content_realtime');
		echo view('footer');
	}
}
