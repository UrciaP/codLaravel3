<?php

namespace App\Http\Controllers;
// use DB;


use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Http\Requests\CreateServiciosRequest;

class ServiciosController extends Controller
{
    public function servicios(){
        
        // $servicios = Servicio::paginate(10);


        $servicios = Servicio::latest()->paginate();

        return view('servicios', compact('servicios'));

        
    }
    public function show($id){

        return view('show',[
            'servicio'=>Servicio::find($id)
        ]);
    }
    public function create(){
        return view('create');
    }
    public function store(CreateServiciosRequest $request){

        Servicio::create($request->validated());

        return redirect()->route('servicios');     
    }

    public function edit(Servicio $id){
        return view('edit',[
            'servicio'=>$id
        ]);     
    }

    // public function update(Servicio $id){
    //     $id->update([
    //         'titulo'=> request('titulo'),
    //         'descripcion'=> request('descripcion')
    //     ]);
        
    //     return redirect()->route('servicios.show',$id);     
    // }

    public function update(Servicio $servicio, CreateServiciosRequest $request){

        $servicio->update($request->validated());

        return redirect()->route('servicios.show',$servicio);     
    }
}
