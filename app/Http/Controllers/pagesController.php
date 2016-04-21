<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class pagesController extends Controller
{

    public function about()
	{
		$people  =  ["Olotin Temitope","Ogunde Kehinde","Raimi Ademola"];

		return view('pages.about',compact('people'));
	}

	public function contact()
	{
		$firstname = "Olotin";

		return view('pages.contact',compact('firstname'));

	}
}
