<?php

namespace App\Http\Controllers;

use App\Models\solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactMail;
use Mail;

class SolicitudController extends Controller
{ 

    public function index(Request $request)
    {   
        $contador = optional(DB::table('solicitudes')->select('contador')->first())->contador ?? 0;
        $texto = trim($request->get('texto'));
        $solicitud = solicitud::where('cedula_usuario','LIKE','%'.$texto.'%')
                      ->orWhere('nombres_usuario','LIKE','%'.$texto.'%')
                      ->orderBy('id', 'desc')
                      ->paginate(8);

        $data = [
            'contador' =>$contador,
            'solicitud' =>$solicitud,
            'texto' =>$texto,
        ];
        return view('user.soporte.solicitud.index',$data);
    }

    public function user(Request $request)
    {
        $texto = trim($request->get('texto'));
        $solicitud = solicitud::where('cedula_usuario','LIKE','%'.$texto.'%')
                      ->orWhere('nombres_usuario','LIKE','%'.$texto.'%')
                    //   ->latest('id')
                      ->paginate(3);
        $data = [
            'solicitud' =>$solicitud,
            'texto' =>$texto,
        ];
        return view('user.soporte.solicitud.user',$data);
    }

    public function create()
    {
        return view('user.soporte.solicitud.create');
    }

    public function store(Request $request)
    {   
        $solicitud = new solicitud();
        $solicitud->nombres_solicitante = $request->nombre_solicitante;
        $solicitud->apellidos_solicitante = $request->apellido_solicitante;
        $solicitud->correo_solicitante = $request->correo_solicitante;
        $solicitud->subdirección_solicitante = $request->subdireccion_solicitante;  
        $solicitud->cedula_usuario = $request->cedula_usuario;
        $solicitud->nombres_usuario = $request->nombre_usuario;
        $solicitud->apellidos_usuario = $request->apellido_usuario;
        $solicitud->telefono_usuario = $request->telefono_usuario;
        $solicitud->correo_usuario = $request->correo_usuario;
        $solicitud->subdirección_usuario = $request->subdireccion_usuario;
        $solicitud->numero_contrato = $request->numero_contrato;
        $solicitud->fecha_inicio = $request->fecha_inicio;
        $solicitud->fecha_fin = $request->fecha_fin;
        $solicitud->unidad = $request->unidad;
        $solicitud->permiso_unidad = $request->permiso_unidad;
        $solicitud->objeto_contrato = $request->objeto_contrato;
        $solicitud->save();
        $contador = optional(DB::table('solicitudes')->select('contador')->first())->contador ?? 0;
        $contador++;
    
        DB::table('solicitudes')->update(['contador' => $contador]);
        $details = [
            'tipo' => 'Correo Electrónico',
            'cedula' => $request->cedula_usuario,
            'nombre' => $request->nombre_usuario,
            'apellido' => $request->apellido_usuario,
            'correo' => $request->correo_usuario
        ];

        Mail::to('alexisbrayan039@gmail.com')->send(new ContactMail($details));
        return redirect()->route('user.soporte.solicitud.create')->with('success', 'La solicitud se ha registrado correctamente, puede consultar el estado digitando su numero de cedula');
    }

    public function edit(string $id)
    {
        $solicitud = solicitud::find($id);
        $data = [
            'solicitud' =>$solicitud,
        ];
        return view('user.soporte.solicitud.edit',$data);
    }

    public function update(Request $request, string $id)
    {
        $solicitud = solicitud::find($id);
        // $solicitud->nombres_solicitante = $request->nombre_solicitante;
        // $solicitud->apellidos_solicitante = $request->apellido_solicitante;
        // $solicitud->correo_solicitante = $request->correo_solicitante;
        // $solicitud->subdirección_solicitante = $request->subdireccion_solicitante;  
        $solicitud->cedula_usuario = $request->cedula_usuario;
        $solicitud->nombres_usuario = $request->nombre_usuario;
        $solicitud->apellidos_usuario = $request->apellido_usuario;
        $solicitud->telefono_usuario = $request->telefono_usuario;
        $solicitud->correo_usuario = $request->correo_usuario;
        $solicitud->subdirección_usuario = $request->subdireccion_usuario;
        $solicitud->numero_contrato = $request->numero_contrato;
        $solicitud->fecha_inicio = $request->fecha_inicio;
        $solicitud->fecha_fin = $request->fecha_fin;
        $solicitud->unidad = $request->unidad;
        $solicitud->permiso_unidad = $request->permiso_unidad;
        $solicitud->objeto_contrato = $request->objeto_contrato;
        $solicitud->observacion = $request->observacion;
        $solicitud->estado = $request->estado;
        $solicitud->save();
        return redirect()->route('user.soporte.solicitud.index');
    }

    public function destroy(string $id)
    {
        $solicitud = solicitud::find($id);
        $solicitud->delete();
        return redirect()->route('user.soporte.solicitud.index');
    }
}
