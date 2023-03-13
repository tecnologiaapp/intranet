<?php

namespace App\Http\Controllers\Panel\Notices;

use App\Http\Controllers\Controller;
use App\Models\Word;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DirectorsWordsController extends Controller
{
   public function index()
   {
      $words = Word::orderBy('title', 'ASC')->get();
      return view('panel.words.index', compact('words'));
   }

   public function create()
   {
      return view('panel.words.create');
   }

   public function store(Request $request)
   {
      $title = $request->title;
      $date = $request->date . ' ' . Carbon::now()->format('H:i:s');

      Word::create([
         'title'  => $title,
         'slug'   => Str::slug($title),
         'content'   => $request->body,
         'created_at' => $date
      ]);

      return back()->with('message', ['success', 'Se han agregado las palabras del director']);
   }

   public function edit(Word $word)
   {
      return view('panel.words.edit', compact('word'));
   }

   public function update(Request $request, Word $word)
   {

      $title = $request->title;
      $date = $request->date . ' ' . Carbon::now()->format('H:i:s');

      $word->update([
         'title'  => $title,
         'slug'   => Str::slug($title),
         'content'   => $request->body,
         'created_at' => $date
      ]);

      return back()->with('message', ['success', 'Se han actualizado las palabras del director']);
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
