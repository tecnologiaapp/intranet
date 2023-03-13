<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Learn;
use Illuminate\Http\Request;

class LearnController extends Controller
{
	public function index()
	{
		$learns = Learn::latest()->get();
		return view('user.learn.index', compact('learns'));
	}

	public function show(Learn $learn)
	{
		return view('user.learn.show', compact('learn'));
	}
}
