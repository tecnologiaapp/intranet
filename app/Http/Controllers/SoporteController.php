<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoporteController extends Controller
{
    public function index()
    {
        return view('user.soporte.index');
    }

    public function caso()
    {
        return view('user.soporte.caso');
    }

    public function solicitud()
    {
        return view('user.soporte.solicitud');
    }
}
