<?php namespace App\Controllers;

use App\Models\Model_servicio;

class Inicio extends BaseController
{
	function __construct(){
	
	}

	//Función que carga la vista principal
	public function index()
	{
		echo view('header');
		echo view('inicio');
		echo view('footer');
	}
}
