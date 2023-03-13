<?php

namespace App\Http\Controllers;

use App\Models\Certificados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificadosController extends Controller
{
    public function index(Request $request)
    {   
        $busqueda = $request->busqueda;
        $certificados = Certificados::where('documento','LIKE','%'.$busqueda.'%')
                      ->orWhere('nombre','LIKE','%'.$busqueda.'%')
                    //   ->latest('id')
                      ->paginate(8);
        $data = [
            'certificados' =>$certificados,
            'busqueda' =>$busqueda,
        ];
        return view('user.certificados.index',$data);
    }

    public function user(Request $request)
    {   
        $texto = trim($request->get('texto'));
        $archivos=DB::table('certificados')
                    ->select('id','nombre','apellido','documento','correo','pdf')
                    ->where('documento', '=', $texto )
                    // ->orWhere('nombre','LIKE','%'.$texto.'%')
                    ->orderBy('nombre','asc')
                    ->paginate(10);
        // $certificados = Certificados::where('documento','LIKE','%'.$texto.'%')
        //               ->orWhere('nombre','LIKE','%'.$texto.'%');
        // $data = [
        //     'certificados' =>$certificados,
        //     'busqueda' =>$texto,
        // ];
        return view('user.certificados.user',compact('archivos','texto'));
    }

  
    public function create()
    {
        return view('user.certificados.create');
    }

   
    public function store(Request $request)
    {   
        $certificado = new Certificados();
        $certificado->nombre = $request->nombre;
        $certificado->apellido = $request->apellido;
        $certificado->documento = $request->cedula;
        $certificado->correo = $request->correo;
        if($request->hasFile('pdf')){
            $archivo =$request->file('pdf');
            $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
            $certificado->pdf = $archivo->getClientOriginalName();
        }
        $certificado->save();
        return redirect()->route('user.certificados.index');
    }

 
    public function show(string $id)
    {
        $certificado = Certificados::find($id);
        $data = [
            'certificados' =>$certificado,
        ];
        return view('user.certificados.show',$data);
    }

  
    public function edit(string $id)
    {
        $certificado = Certificados::find($id);
        $data = [
            'certificados' =>$certificado,
        ];
        return view('user.certificados.edit',$data);
    }

  
    public function update(Request $request, string $id)
    {
        $certificado = Certificados::find($id);
        $certificado->nombre = $request->nombre;
        $certificado->apellido = $request->apellido;
        $certificado->documento = $request->cedula;
        $certificado->correo = $request->correo;
        if($request->hasFile('pdf')){
            $archivo =$request->file('pdf');
            $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
            $certificado->pdf = $archivo->getClientOriginalName();
        }
        $certificado->save();
        return redirect()->route('user.certificados.index');
    }

  
    public function destroy(string $id)
    {
        $certificado = Certificados::find($id);
        $certificado->delete();
        return redirect()->route('user.certificados.index');
    }
}
