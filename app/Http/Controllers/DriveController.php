<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drive;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactMail;
use Mail;

class DriveController extends Controller
{
    public function index(Request $request)
    {
        $contador = optional(DB::table('drive')->select('contador')->first())->contador ?? 0;
        $texto = trim($request->get('texto'));
        $drive = Drive::where('cedula_usuario','LIKE','%'.$texto.'%')
                      ->orWhere('nombres_usuario','LIKE','%'.$texto.'%')
                      ->orderBy('id', 'desc')
                      ->paginate(6);
        $data = [
            'contador' =>$contador,
            'drive' =>$drive,
            'texto' =>$texto,
        ];
        return view('user.soporte.drive.index',$data);
    }

    public function user(Request $request)
    {
        $texto = trim($request->get('texto'));
        $drive = Drive::where('cedula_usuario','LIKE','%'.$texto.'%')
                      ->orWhere('nombres_usuario','LIKE','%'.$texto.'%')
                    //   ->latest('id')
                      ->paginate(3);
        $data = [
            'drive' =>$drive,
            'texto' =>$texto,
        ];
        return view('user.soporte.drive.user',$data);
    }

    public function create()
    {
        return view('user.soporte.drive.create');
    }

    public function store(Request $request)
    {   
        $drive = new Drive();
        $drive->cedula_usuario = $request->cedula_usuario;
        $drive->nombres_usuario = $request->nombre_usuario;
        $drive->apellidos_usuario = $request->apellido_usuario;
        $drive->correo_usuario = $request->correo_usuario;
        $drive->subdirección_usuario = $request->subdireccion_usuario;
        $drive->unidad = $request->unidad;
        $drive->permiso_unidad = $request->permiso_unidad;
        $drive->save();
        $contador = optional(DB::table('drive')->select('contador')->first())->contador ?? 0;
        $contador++;
    
        DB::table('drive')->update(['contador' => $contador]);
        $details = [
            'tipo' => 'Permiso de Drive',
            'cedula' => $request->cedula_usuario,
            'nombre' => $request->nombre_usuario,
            'apellido' => $request->apellido_usuario,
            'correo' => $request->correo_usuario
        ];

        Mail::to('alexisbrayan039@gmail.com')->send(new ContactMail($details));
        return redirect()->route('user.soporte.drive.create')->with('success', 'La solicitud se ha registrado correctamente, puede consultar el estado digitando su numero de cedula');
    }

    public function edit(string $id)
    {
        $drive = Drive::find($id);
        $data = [
            'drive' =>$drive,
        ];
        return view('user.soporte.drive.edit',$data);
    }

    public function update(Request $request, string $id)
    {
        $drive = Drive::find($id); 
        $drive->cedula_usuario = $request->cedula_usuario;
        $drive->nombres_usuario = $request->nombre_usuario;
        $drive->apellidos_usuario = $request->apellido_usuario;
        $drive->correo_usuario = $request->correo_usuario;    
        $drive->unidad = $request->unidad;
        $drive->observacion = $request->observacion;
        $drive->estado = $request->estado;
        $drive->save();
        return redirect()->route('user.soporte.drive.index');
    }

    public function destroy(string $id)
    {
        $drive = Drive::find($id);
        $drive->delete();
        return redirect()->route('user.soporte.drive.index');
    }
}
