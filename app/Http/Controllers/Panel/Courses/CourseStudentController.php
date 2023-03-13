<?php

namespace App\Http\Controllers\Panel\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course\Course;
use App\Models\Course\CourseStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseStudentController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
   //
   }

   public static function randomToken( $str = '', $start = 5, $end = 20 )
   {
      return substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), $start, $end);
      $pattern = array("/","+","=");
      $str = Time().$str;

      return substr( str_replace( $pattern, '', hash( "sha512", $str ) ), $start, $end );
   }

   public function store(Request $request, Course $course)
   {
      $invoice = self::randomToken();
      $token = self::randomToken();

      if ($course->price == 0) {

         $course_student = CourseStudent::create([
            'user_id'      => Auth::id(),
            'course_id'    => $course->id,
            'course_status' => 'Paid out',
            'amount'       => 0,
            'invoice'      => $invoice,
            'token'        => $token,
         ]);

         if ($course->lessons()->count() > 0) {
            return redirect()->route('user.lesson.show', [$course, $course->lessons->first()]);
         }

         return back()->with('message', ['success', 'Te has inscrito correctamente, pronto verás las lecciones']); 
      }
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
}
