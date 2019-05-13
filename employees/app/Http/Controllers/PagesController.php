<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class PagesController extends Controller
{
	public function home()
	{
		return view('welcome');
	}

	public function details()
	{
		$companies = Company::where('user_id', auth()->id())->get();

		return view('details', compact('companies'));
	}
}
