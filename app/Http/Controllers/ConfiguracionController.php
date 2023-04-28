<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Configuracion;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactMail;
use Mail;

class ConfiguracionController extends Controller
{
    public function index(Request $request)
    {
        $contador = optional(DB::table('configuracion')->select('contador')->first())->contador ?? 0;
        $texto = trim($request->get('texto'));
        $configuracion = Configuracion::where('cedula_usuario','LIKE','%'.$texto.'%')
                      ->orWhere('nombres_usuario','LIKE','%'.$texto.'%')
                      ->orderBy('id', 'desc')
                      ->paginate(8);
        $data = [
            'contador' =>$contador,
            'configuracion' =>$configuracion,
            'texto' =>$texto,
        ];
        return view('user.soporte.configuracion.index',$data);
    }

    public function user(Request $request)
    {
        $texto = trim($request->get('texto'));
        $configuracion = Configuracion::where('cedula_usuario','LIKE','%'.$texto.'%')
                      ->orWhere('nombres_usuario','LIKE','%'.$texto.'%')
                    //   ->latest('id')
                      ->paginate(3);
        $data = [
            'configuracion' =>$configuracion,
            'texto' =>$texto,
        ];
        return view('user.soporte.configuracion.user',$data);
    }

    public function create()
    {
        return view('user.soporte.configuracion.create');
    }

    public function store(Request $request)
    {   
        $configuracion = new Configuracion();
        $configuracion->cedula_usuario = $request->cedula_usuario;
        $configuracion->nombres_usuario = $request->nombre_usuario;
        $configuracion->apellidos_usuario = $request->apellido_usuario;
        $configuracion->correo_usuario = $request->correo_usuario;
        $configuracion->subdirección_usuario = $request->subdireccion_usuario;
        $configuracion->tipo_soporte = $request->soporte;
        $configuracion->detalle = $request->detalle;
        $configuracion->save();
        $contador = optional(DB::table('configuracion')->select('contador')->first())->contador ?? 0;
        $contador++;
        DB::table('configuracion')->update(['contador' => $contador]);
        $details = [
            'tipo' => 'Configuración',
            'cedula' => $request->cedula_usuario,
            'nombre' => $request->nombre_usuario,
            'apellido' => $request->apellido_usuario,
            'correo' => $request->correo_usuario
        ];

        Mail::to('alexisbrayan039@gmail.com')->send(new ContactMail($details));
        return redirect()->route('user.soporte.configuracion.create')->with('success', 'La solicitud se ha registrado correctamente, puede consultar el estado digitando su numero de cedula');
    }

    public function edit(string $id)
    {
        $configuracion = Configuracion::find($id);
        $data = [
            'configuracion' =>$configuracion,
        ];
        return view('user.soporte.configuracion.edit',$data);
    }

    public function update(Request $request, string $id)
    {
        $configuracion = Configuracion::find($id); 
        $configuracion->cedula_usuario = $request->cedula_usuario;
        $configuracion->nombres_usuario = $request->nombre_usuario;
        $configuracion->apellidos_usuario = $request->apellido_usuario;
        $configuracion->correo_usuario = $request->correo_usuario;
        $configuracion->subdirección_usuario = $request->subdireccion_usuario;       
        $configuracion->tipo_soporte = $request->soporte;
        $configuracion->detalle = $request->detalle;
        $configuracion->observacion = $request->observacion;
        $configuracion->estado = $request->estado;
        $configuracion->save();
        return redirect()->route('user.soporte.configuracion.index');
    }

    public function destroy(string $id)
    {
        $configuracion = Configuracion::find($id);
        $configuracion->delete();
        return redirect()->route('user.soporte.configuracion.index');
    }
}
