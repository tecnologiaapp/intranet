<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Word;
use Illuminate\Http\Request;

class DirectorsWordsController extends Controller
{
   public function index()
   {
   	$words = Word::latest()->get();
   	return view('user.words.index', compact('words'));
   }

   public function show(Word $word)
   {
      return view('user.words.show', compact('word'));
   }
}
