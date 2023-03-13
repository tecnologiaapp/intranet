<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Mailing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MailingController extends Controller
{
   public function index(Request $request)
   {
      return view('user.mailing.index', compact('request'));
   }
   public function store(Request $request)
   {
      $email = $request->mailing_email;

      $validator = Validator::make($request->all(), [
         'mailing_email' => 'required|email|unique:mailings|max:100',
         'name' => 'required|max:100'
      ]);

      if ($validator->fails()) {
         return response()->json(['success' => false, 'title' => 'Error', 'message' => ' Es posible que el correo electrónico ya esté registrado. Debes agregar un nombre.', 'error' => $validator->errors()], 200);
      } else {
         Mailing::create([
            'mailing_email' => $email,
            'name'  => $request->name,
            'code' => Str::random(5)
         ]);

         return response()->json(
            [
               'title'   => 'Éxito',
               'success' => true,
               'message' => 'Te has suscrito exitosamente.'
            ]
         );
      }
   }
}
