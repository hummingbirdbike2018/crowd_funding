<?php

namespace App\Http\Controllers;
use App\Draft;
use Illuminate\Http\Request;

class DraftController extends Controller
{
	public function index()
	{
			return view('draft');
	}

	public function confirm()
	{
			return view('draft.confirm');
	}

	public function complete()
	{
			return view('draft.complete');
	}
}
