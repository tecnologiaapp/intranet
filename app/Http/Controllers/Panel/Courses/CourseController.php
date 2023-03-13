<?php

namespace App\Http\Controllers\Panel\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course\Course;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function index()
   {
      $courses = Course::whereStatus('Published')->latest()->get();
      return view('panel.courses.index', compact('courses'));
   }

   public function store(Request $request)
   {
      $course = Course::create([
         'user_id'   => Auth::id(),
         'title'     => $request->title,
         'subtitle'  => $request->subtitle,
         'language'  => 'Spanish',
         'slug'      => Str::slug($request->title),
         'level'     => 'Beginner',
         'status'    => 'Pending',
         'to_learn'  => $request->to_learn,
         'featured'  => 0,
         'price'     => 0
      ]);

      $course->description()->create(['body' => 'Sin descripción todavía']);

      return redirect()->route('panel.courses.edit', $course)->with('message', ['success', 'Se ha agregado el curso. Ahora debes terminar de editarlo']);      
   }

   public function show(Course $course)
   {
      return view('panel.courses.show', compact('course'));
   }

   public function edit(Course $course)
   {
      return view('panel.courses.edit', compact('course'));
   }

   public function update(Request $request, Course $course)
   {
      $course->title     = $request->title;
      $course->subtitle  = $request->subtitle;
      $course->language  = $request->language;
      $course->level     = $request->level;
      $course->status    = $request->status;
      $course->to_learn  = $request->to_learn;

      $course->update();
      $course->description()->update(['body' => $request->input('description')]);

      return back()->with('message', ['success', 'Se ha actualizado el curso']); 
   }
}
