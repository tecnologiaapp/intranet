<?php

namespace App\Http\Controllers\Panel\Notices;

use App\Http\Controllers\Controller;
use App\Models\Learn;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LearnController extends Controller
{
   public function index()
   {
      $learns = Learn::orderBy('title', 'ASC')->get();
      return view('panel.learn.index', compact('learns'));
   }

   public function create()
   {
      return view('panel.learn.create');
   }

   public function store(Request $request)
   {
      $title = $request->title;
      $date = $request->date . ' ' . Carbon::now()->format('H:i:s');

      Learn::create([
         'title'  => $title,
         'slug'   => Str::slug($title),
         'content'   => $request->body,
         'user_id'   => Auth::id(),
         'created_at' => $date
      ]);

      return back()->with('message', ['success', 'Se ha agregado la información de "Aprendamos"']);
   }

   public function edit(Learn $learn)
   {
      return view('panel.learn.edit', compact('learn'));
   }

   public function update(Request $request, Learn $learn)
   {

      $title = $request->title;
      $date = $request->date . ' ' . Carbon::now()->format('H:i:s');

      $learn->update([
         'title'  => $title,
         'slug'   => Str::slug($title),
         'content'   => $request->body,
         'user_id'   => Auth::id(),
         'created_at' => $date
      ]);

      return back()->with('message', ['success', 'Se ha actualizado la información de "Aprendamos"']);
   }

   public function destroy($id)
   {
   //
   }
}
