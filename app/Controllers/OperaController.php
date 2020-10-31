<?php namespace App\Controllers;

class OperaController extends BaseController
{
	public function index()
	{

		
		$vistas = view('plantilla/header').
					view('plantilla/menu').
					view('index').
					view('plantilla/footer');
		return $vistas;
	}

	public function cant()
	{

		
		$vistas = view('plantilla/header').
					view('plantilla/menu').
					view('cantantes').
					view('plantilla/footer');
		return $vistas;
	}

	public function orq()
	{

		
		$vistas = view('plantilla/header').
					view('plantilla/menu').
					view('orquestas').
					view('plantilla/footer');
		return $vistas;
	}

	public function fam()
	{

		
		$vistas = view('plantilla/header').
					view('plantilla/menu').
					view('famosas').
					view('plantilla/footer');
		return $vistas;
	}

	
}
