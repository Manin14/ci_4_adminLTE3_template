<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//return view('Template/template');
		return view('Profil/index');
	}


 public function lte()
	{
		
		return view('LTE');
	}

	public function hom()
	{
		
		return view('home');
	}

	public function welcome()
	{
		
		return view('welcome_message');
	}



	public function template()
	{
		
		return view('Template/template');
	}
}
