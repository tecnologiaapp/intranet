<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaisajeController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      return view('user.Paisaje.index');
      
   }

   public function urbano()
   {
      return view('user.Paisaje.urbano');
      
   }

   public function patrimonio()
   {
      return view('user.Paisaje.patrimonio');
      
   }

   public function prado()
   {
      return view('user.Paisaje.prado');
      
   }

   public function pot()
   {
      return view('user.Paisaje.POT');
      
   }

}
