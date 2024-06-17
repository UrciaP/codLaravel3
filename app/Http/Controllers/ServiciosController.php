<?php

namespace App\Http\Controllers;
// use DB;


use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    public function servicios(){
        
        // $servicios = Servicio::paginate(10);


        $servicios = Servicio::latest()->paginate();

        return view('servicios', compact('servicios'));
        // $servicios = Servicio::latest()->paginate(10);


        // $servicios=Servicio::latest('titulo')->get();
        // $servicios=Servicio::get();
        // $servicios = Servicio::latest()->paginate();
        
        // $servicios=[
        //     ['titulo'=>'Mantenimiento'],
        //     ['titulo'=>'Afinamiento'],
        //     ['titulo'=>'cambio de aceite'],
        //     ['titulo'=>'Lavado tipo salón'],
        // ];
        
    }
    public function show($id){

        return view('show',[
            'servicio'=>Servicio::find($id)
        ]);
    }
    public function create(){
        return view('create');
    }
    public function store(){
        
        
        $camposv = request()->validate([
            'titulo'=> 'required',
            'descripcion'=> 'required'
        ]);

        Servicio::create($camposv);

        return redirect()->route('servicios');     
        
        // metodo1
        // $titulo = request('titulo');
        // $descripcion = request('descripcion');

        //almacenamos en la bd usando el modelo Servicio
        // Servicio::create([
            // 'titulo'=>$titulo,
            // 'descripcion'=>$descripcion
        // ]);

        // return redirect()->route('servicios');
        // return redirect('/servicios');
    }
}
