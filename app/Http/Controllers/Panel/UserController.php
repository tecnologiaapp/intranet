<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Dependency;
use App\Models\User;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      $users = User::orderBy('name', 'ASC')->with(['dependency', 'city'])->get();
      return view('panel.users.index', compact('users'));
   }

   public function dependency(Dependency $dependency)
   {
      $users = User::orderBy('name', 'ASC')->where('dependency_id', $dependency->id)->get();
      return view('panel.users.index', compact('users'));
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
      $cities = City::orderBy('name', 'ASC')->get();
      $dependencies = Dependency::orderBy('title', 'ASC')->get();
      $days = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
      $months = [
         ['id' => 1, 'name' => 'Enero'], 
         ['id' => 2, 'name' => 'Febrero'], 
         ['id' => 3, 'name' => 'Marzo'], 
         ['id' => 4, 'name' => 'Abril'], 
         ['id' => 5, 'name' => 'Mayo'], 
         ['id' => 6, 'name' => 'Junio'], 
         ['id' => 7, 'name' => 'Julio'], 
         ['id' => 8, 'name' => 'Agosto'], 
         ['id' => 9, 'name' => 'Septiembre'], 
         ['id' => 10, 'name' => 'Octubre'], 
         ['id' => 11, 'name' => 'Noviembre'], 
         ['id' => 12, 'name' => 'Diciembre']
      ];

      return view('panel.users.create', compact(
         ['cities', 'days', 'months', 'dependencies']
      ));
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(Request $request)
   {
      $request->validate([
         'name' => 'required|max:120',
         'email' => 'required|email|unique:users',
         'username' => 'required|max:50|unique:users',
         'city_id' => 'required',
         'dependency_id' => 'required',
         'phone_number' => 'required',
         'position' => 'required',
         'profession' => 'required',
         'user_type' => 'required',
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,JPEG,PNG,JPG,GIF,SVG',
      ]);

      //Subir la imagen del usuario
      $file = $request->file('image');
      $filename = $request->username;
      $extension = $file->getClientOriginalExtension();
      $fileNameToStore = $filename.'.'.$extension;

      // Resize image
      $resize = Image::make($file)->resize(600, null, function ($constraint) {
         $constraint->aspectRatio();
      })->encode($extension);

      $thumbnail_resize = Image::make($file)->fit(100, 100, function ($constraint) {
         $constraint->aspectRatio();
      })->encode($extension);

      // Put image to storage
      $image_path = Storage::disk('public')->put('users/'.$fileNameToStore, $resize->__toString());
      $thumbnail_path = Storage::disk('public')->put('users/thumbnail/'.$fileNameToStore, $thumbnail_resize->__toString());

      // Put image to storage
      $image_path = Storage::disk('public')->put('users/'.$fileNameToStore, $resize->__toString());
      $thumbnail_path = Storage::disk('public')->put('users/thumbnail/'.$fileNameToStore, $thumbnail_resize->__toString());

      User::create([
         'name' => $request->name,
         'username' => $request->username,
         'email' => $request->email,
         'profile_photo_path' => $request->username.'.'.$extension,
         'password' => Hash::make($request->username),
         'status' => $request->status,
         'city_id' => $request->city_id,
         'sex' => $request->sex,
         'day' => $request->day,
         'month' => $request->month,
         'dependency_id' => $request->dependency_id,
         'phone_number' => $request->phone_number,
         'ext_number' => $request->ext_number,
         'position' => $request->position,
         'profession' => $request->profession,
         'user_type' => 'Linked',//$request->user_type
      ]);

      //Notificar al usuario vía correo electrónico que su cuenta fue creada
      return back()->with('message', ['success', 'Se ha registrado el usuario']);
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
   public function edit(User $user)
   {
      $cities = City::orderBy('name', 'ASC')->get();
      $dependencies = Dependency::orderBy('title', 'ASC')->get();
      $days = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
      
      $months = [
         ['id' => 1, 'name' => 'Enero'], 
         ['id' => 2, 'name' => 'Febrero'], 
         ['id' => 3, 'name' => 'Marzo'], 
         ['id' => 4, 'name' => 'Abril'], 
         ['id' => 5, 'name' => 'Mayo'], 
         ['id' => 6, 'name' => 'Junio'], 
         ['id' => 7, 'name' => 'Julio'], 
         ['id' => 8, 'name' => 'Agosto'], 
         ['id' => 9, 'name' => 'Septiembre'], 
         ['id' => 10, 'name' => 'Octubre'], 
         ['id' => 11, 'name' => 'Noviembre'], 
         ['id' => 12, 'name' => 'Diciembre']
      ];

      return view('panel.users.edit', compact(
         ['user', 'cities', 'days', 'months', 'dependencies']
      ));
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function update(Request $request, User $user)
   {
      $request->validate([
         'name' => 'required|max:120',
         // 'email' => 'required|email|unique:users'.$this->user->id,
         // 'username' => 'required|max:50|unique:users'.$this->user->id,
         'city_id' => 'required',
         'dependency_id' => 'required',
         'phone_number' => 'required',
         'position' => 'required',
         'profession' => 'required',
         'user_type' => 'required',
         'image' => 'image|mimes:jpeg,png,jpg,gif,svg,JPEG,PNG,JPG,GIF,SVG',
      ]);

      if($request->hasFile('image')){
         //Subir la imagen del usuario
         $file = $request->file('image');
         $filename = $request->username;
         $extension = $file->getClientOriginalExtension();
         $fileNameToStore = $filename.'.'.$extension;

         // Resize image
         $resize = Image::make($file)->resize(600, null, function ($constraint) {
            $constraint->aspectRatio();
         })->encode($extension);

         $thumbnail_resize = Image::make($file)->fit(100, 100, function ($constraint) {
            $constraint->aspectRatio();
         })->encode($extension);

         // Put image to storage
         $image_path = Storage::disk('public')->put('users/'.$fileNameToStore, $resize->__toString());
         $thumbnail_path = Storage::disk('public')->put('users/thumbnail/'.$fileNameToStore, $thumbnail_resize->__toString());
      } else {
         $fileNameToStore = $user->profile_photo_path;
      }

      $user->update([
         'name' => $request->name,
         'username' => $request->username,
         'email' => $request->email,
         'profile_photo_path' => $fileNameToStore,
         'password' => Hash::make($request->username),
         'status' => $request->status,
         'city_id' => $request->city_id,
         'sex' => $request->sex,
         'day' => $request->day,
         'month' => $request->month,
         'dependency_id' => $request->dependency_id,
         'phone_number' => $request->phone_number,
         'ext_number' => $request->ext_number,
         'position' => $request->position,
         'profession' => $request->profession,
         'user_type' => 'Linked',//$request->user_type
      ]);

      //Notificar al usuario vía correo electrónico que su cuenta fue creada
      return back()->with('message', ['success', 'Se ha actualizado el usuario']);
   }

   /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function destroy(User $user)
   {
      if ($user->status == 'Active') {
         $user->status = 'Inactive';
      } else {
         $user->status = 'Active';
      }

      $user->update();

      return back()->with('message', ['success', 'Se ha actualizado el usuario']);
   }
}
