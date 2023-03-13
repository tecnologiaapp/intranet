<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Entrepreneurship;
use Illuminate\Http\Request;

class UserEntrepreneurshipController extends Controller
{
   public function index()
   {
   	$entrepreneurships = Entrepreneurship::latest()->get();
   	return view('user.entrepreneurships.index', compact('entrepreneurships'));
   }

   public function show(Entrepreneurship $entrepreneurship)
   {
      return view('user.entrepreneurships.show', compact('entrepreneurship'));
   }
}
