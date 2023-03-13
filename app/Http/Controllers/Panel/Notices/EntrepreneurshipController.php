<?php

namespace App\Http\Controllers\Panel\Notices;

use App\Http\Controllers\Controller;
use App\Models\Entrepreneurship;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EntrepreneurshipController extends Controller
{
   public function index()
   {
      $entrepreneurships = Entrepreneurship::orderBy('title', 'ASC')->get();
      return view('panel.entrepreneurships.index', compact('entrepreneurships'));
   }

   public function create()
   {
      return view('panel.entrepreneurships.create');
   }

   public function store(Request $request)
   {
      $title = $request->title;
      $date = $request->date . ' ' . Carbon::now()->format('H:i:s');

      Entrepreneurship::create([
         'title'  => $title,
         'slug'   => Str::slug($title),
         'content'   => $request->body,
         'created_at' => $date
      ]);

      return back()->with('message', ['success', 'Se ha agregado el emprendimiento']);
   }

   public function edit(Entrepreneurship $entrepreneurship)
   {
      return view('panel.entrepreneurships.edit', compact('entrepreneurship'));
   }

   public function update(Request $request, Entrepreneurship $entrepreneurship)
   {

      $title = $request->title;
      $date = $request->date . ' ' . Carbon::now()->format('H:i:s');

      $entrepreneurship->update([
         'title'  => $title,
         'slug'   => Str::slug($title),
         'content'   => $request->body,
         'created_at' => $date
      ]);

      return back()->with('message', ['success', 'Se ha actualizado el emprendimiento']);
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
