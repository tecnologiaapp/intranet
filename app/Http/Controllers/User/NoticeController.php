<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
   public function index()
   {
   	$notices = Notice::latest()->simplePaginate(10);
      return view('user.notices.index', compact('notices'));
   }

   public function show(Notice $notice)
   {
      return view('user.notices.show', compact('notice'));
   }
}
