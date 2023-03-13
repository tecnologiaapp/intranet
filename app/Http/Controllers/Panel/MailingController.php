<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Mailing;
use Illuminate\Http\Request;

class MailingController extends Controller
{
   public function index()
   {
      $mailings = Mailing::latest()->get();
      return view('panel.mailing.index', compact('mailings'));
   }
}
