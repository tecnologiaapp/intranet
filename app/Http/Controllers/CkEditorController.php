<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CkEditorController extends Controller
{
   public function index(Request $request)
   {
      if ($request->hasFile('upload')) {
         $originName = $request->file('upload')->getClientOriginalName();
         $fileName = pathinfo($originName, PATHINFO_FILENAME);
         $extension = $request->file('upload')->getClientOriginalExtension();
         $fileName = $fileName . '_' . time() . '.' . $extension;
         $request->file('upload')->move(public_path('storage/notices/'), $fileName);
         $CKEditorFuncNum = $request->input('CKEditorFuncNum');
         $url = asset('storage/notices/' . $fileName);
         $msg = __('Image uploaded successfully');
         $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
         @header('Content-type: text/html; charset=utf-8');
         echo $response;
      }
   }
}
