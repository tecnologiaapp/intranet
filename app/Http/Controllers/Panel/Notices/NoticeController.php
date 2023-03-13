<?php

namespace App\Http\Controllers\Panel\Notices;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\NoticeCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class NoticeController extends Controller
{
   public function index()
   {
      $notices = Notice::with(['user', 'notice_category'])->orderBy('title', 'ASC')->get();
      return view('panel.notices.index', compact('notices'));
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
      $notice_categories = NoticeCategory::orderBy('notice_category_title', 'ASC')->get();
      return view('panel.notices.create', compact('notice_categories'));
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(Request $request)
   {
      $title = $request->title;
      $date = $request->date . ' ' . Carbon::now()->format('H:i:s');

      Notice::create([
         'title'  => $title,
         'slug'   => Str::slug($title),
         'content'   => $request->body,
         'user_id'   => Auth::id(),
         'notice_category_id'   => $request->notice_category_id,
         'created_at' => $date
      ]);

      return back()->with('message', ['success', 'Se ha agregado la noticia']);
   }

   public function ckeditor(Request $request)
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
   public function edit(Notice $notice)
   {
      $notice_categories = NoticeCategory::orderBy('notice_category_title', 'ASC')->get();
      return view('panel.notices.edit', compact(['notice_categories', 'notice']));
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function update(Request $request, Notice $notice)
   {
      $title = $request->title;
      $date = $request->date . ' ' . Carbon::now()->format('H:i:s');

      $notice->update([
         'title'  => $title,
         'slug'   => Str::slug($title),
         'content'   => $request->body,
         'user_id'   => Auth::id(),
         'notice_category_id'   => $request->notice_category_id,
         'created_at' => $date
      ]);

      return back()->with('message', ['success', 'Se ha actualizado la noticia']);
   }
}
