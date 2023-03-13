<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      $current_month = Carbon::now()->format('m');
      switch ($current_month) {
         case "01":
            $month = 'enero';
            break;
         case "02":
            $month = 'febrero';
            break;
         case "03":
            $month = 'marzo';
            break;
         case "04":
            $month = 'abril';
            break;
         case "05":
            $month = 'mayo';
            break;
         case "06":
            $month = 'junio';
            break;
         case "07":
            $month = 'julio';
            break;
         case "08":
            $month = 'agosto';
            break;
         case "09":
            $month = 'septiembre';
            break;
         case "10":
            $month = 'octubre';
            break;
         case "11":
            $month = 'noviembre';
            break;
         default:
            $month = 'diciembre';
            break;
      }

      $notices = Notice::latest()->take(3)->get();
      $users = User::whereStatus('Active')->where('month', $current_month)->orderBy('day', 'ASC')->get();
      //User::whereMonth('date_of_birth', '=', $current_month)->orderBy('date_of_birth', 'ASC')->get();
      return view('index', compact(['users', 'month', 'notices']));
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
   //
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(Request $request)
   {
   //
   }

   /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function show($id)
   {
   //
   }

   /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function edit($id)
   {
   //
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function update(Request $request, $id)
   {
   //
   }

   /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function destroy($id)
   {
   //
   }
}
