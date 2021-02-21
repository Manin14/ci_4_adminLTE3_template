<?php

namespace App\Controllers;

class Profilku extends BaseController
{
	public function profil()
	{
		//return view('Template/template');
		return view('Profil/index');
	}

    public function kontak()
	{
		//return view('Template/template');
		return view('Profil/kontak');
	}

	public function calender()
	{
		//return view('Template/template');
		return view('Profil/calender');
	}

	public function calender_2()
	{
		//return view('Template/template');
		return view('Profil/calender_2');
	}



}
