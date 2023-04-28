<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;
use App\Models\Tecnico;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactMail;
use Mail;

class TecnicoController extends Controller
{
    public function index(Request $request)
    {
        $contador = optional(DB::table('tecnico')->select('contador')->first())->contador ?? 0;
        $texto = trim($request->get('texto'));
        $tecnico = Tecnico::where('cedula_usuario','LIKE','%'.$texto.'%')
                      ->orWhere('nombres_usuario','LIKE','%'.$texto.'%')
                      ->orderBy('id', 'desc')
                      ->paginate(8);
        $data = [
            'contador' =>$contador,
            'tecnico' =>$tecnico,
            'texto' =>$texto,
        ];
        return view('user.soporte.tecnico.index',$data);
    }

    public function user(Request $request)
    {
        $texto = trim($request->get('texto'));
        $tecnico = Tecnico::where('cedula_usuario','LIKE','%'.$texto.'%')
                      ->orWhere('nombres_usuario','LIKE','%'.$texto.'%')
                    //   ->latest('id')
                      ->paginate(3);
        $data = [
            'tecnico' =>$tecnico,
            'texto' =>$texto,
        ];
        return view('user.soporte.tecnico.user',$data);
    }

    public function create()
    {
        return view('user.soporte.tecnico.create');
    }

    public function store(Request $request)
    {   

            // Validar la imagen
        $validator = Validator::make($request->all(), [
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:14336',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $tecnico = new Tecnico();
        $tecnico->cedula_usuario = $request->cedula_usuario;
        $tecnico->nombres_usuario = $request->nombre_usuario;
        $tecnico->apellidos_usuario = $request->apellido_usuario;
        $tecnico->correo_usuario = $request->correo_usuario;
        $tecnico->subdirección_usuario = $request->subdireccion_usuario;
        $tecnico->tipo_soporte = $request->soporte;
        $tecnico->detalle = $request->detalle;
          // Guardar la imagen
          if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imageName = time().'.'.$imagen->getClientOriginalExtension();
            $imagen->move(public_path('soporte'), $imageName);
            $tecnico->imagen = $imageName;
        } else {
            $tecnico->imagen = null;
        }
        $tecnico->save();
        $contador = optional(DB::table('tecnico')->select('contador')->first())->contador ?? 0;
        $contador++;
    
        DB::table('tecnico')->update(['contador' => $contador]);
        $details = [
            'tipo' => 'Soporte Técnico',
            'cedula' => $request->cedula_usuario,
            'nombre' => $request->nombre_usuario,
            'apellido' => $request->apellido_usuario,
            'correo' => $request->correo_usuario
        ];

        Mail::to('alexisbrayan039@gmail.com')->send(new ContactMail($details));
        return redirect()->route('user.soporte.tecnico.create')->with('success', 'La solicitud se ha registrado correctamente, puede consultar el estado digitando su numero de cedula');
    }

    public function edit(string $id)
    {
        $tecnico = Tecnico::find($id);
        $data = [
            'tecnico' =>$tecnico,
        ];
        return view('user.soporte.tecnico.edit',$data);
    }

    public function update(Request $request, string $id)
    {
        $tecnico = Tecnico::find($id); 
        $tecnico->cedula_usuario = $request->cedula_usuario;
        $tecnico->nombres_usuario = $request->nombre_usuario;
        $tecnico->apellidos_usuario = $request->apellido_usuario;
        $tecnico->correo_usuario = $request->correo_usuario;
        $tecnico->subdirección_usuario = $request->subdireccion_usuario;       
        $tecnico->tipo_soporte = $request->soporte;
        $tecnico->detalle = $request->detalle;
        $tecnico->observacion = $request->observacion;
        $tecnico->estado = $request->estado;
        $tecnico->save();
        return redirect()->route('user.soporte.tecnico.index');
    }

    public function destroy(string $id)
    {
        $tecnico = Tecnico::find($id);
        $tecnico->delete();
        return redirect()->route('user.soporte.tecnico.index');
    }
}
