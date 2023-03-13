<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CkeditorController extends Controller
{
   public function store(Request $request, $path)
   {
      $path_url = 'storage/' . str_replace('@', '/', $path);

      if ($request->hasFile('upload')) {
         $originName = $request->file('upload')->getClientOriginalName();
         $fileName = pathinfo($originName, PATHINFO_FILENAME);
         $extension = $request->file('upload')->getClientOriginalExtension();
         $fileName = Str::slug($fileName) . '_' . time() . '.' . $extension;
         $request->file('upload')->move(public_path($path_url), $fileName);
         $url = asset($path_url . '/' . $fileName);
      }

      return response()->json(['url' => $url]);
   }
}
