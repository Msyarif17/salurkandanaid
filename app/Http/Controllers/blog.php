<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blog extends Controller
{
	public function forbid()
	{
		return 'horbiden';
	}
	public function index()
	{
		return view('index');
	}

	public function vismis()
	{
		return view('visimisi');
	}

	public function tkami()
	{
		return view('tentangkami');
	}

	public function login()
	{
		return view('login');
	}

	public function penggalangan()
	{
		return view('penggalangan');
	}

	public function alur()
	{
		return view('alur');
	}
}
