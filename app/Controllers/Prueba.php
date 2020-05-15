<?php namespace App\Controllers;

class Prueba extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
		echo "ESTA ES LA FUNCION INDEX";
	}

    public function test(){
        echo "esto es la función test";
    }

    public function test2(){
        echo "ESTO ES LA FUNCION TEST2";
    }
	//--------------------------------------------------------------------

}
