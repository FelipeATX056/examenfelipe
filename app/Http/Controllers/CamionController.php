<?php

namespace App\Http\Controllers;

use App\Models\Camionero;
use Illuminate\Http\Request;

class CamionController extends Controller
{
    public function index(){
        $camioneros = Camionero::all();
        return view('tablacamioneros',compact('camioneros'));
    }

    public function create(){
        return view('crearcamionero');
    }

    public function store(Request $request){
        $camionero = new Camionero();
        $camionero->dni = $request->dni;
        $camionero->nombre = $request->nombre;
        $camionero->telefono = $request->telefono;
        $camionero->direccion = $request->direccion;
        $camionero->salario = $request->salario;
        $camionero->poblacion = $request->poblacion;
        $camionero->save();
        return to_route('camionero.index');
    }

    public function edit($id){
        $camionero = Camionero::find($id);
        return view('editarcamionero',compact('camionero'));
    }

    public function update(Request $request,$id){
        $camionero = Camionero::find($id);
        $camionero->dni = $request->dni;
        $camionero->nombre = $request->nombre;
        $camionero->telefono = $request->telefono;
        $camionero->direccion = $request->direccion;
        $camionero->salario = $request->salario;
        $camionero->poblacion = $request->poblacion;
        $camionero->save();
        return to_route('camionero.index');
    }

    public function destroy($id){
        Camionero::destroy($id);
        return to_route('camionero.index');
    }
    
}
