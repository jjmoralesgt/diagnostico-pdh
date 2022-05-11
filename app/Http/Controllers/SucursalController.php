<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\Sucursal;

class SucursalController extends Controller
{
    public function index(){
        return Sucursal::all()->sortByDesc('id')->values();
    }

    public function show(Sucursal $sucursal){
        return $sucursal;
    }

    public function create(Request $request){

        try {
            $sucursal = Sucursal::create($request->all());

            if($sucursal){
                $resp = array(
                    'respuesta' => 'success',
                    'mensaje' => 'Registro almacenado con exito',
                );

                return response()->json($resp);
            }
        } catch (QueryException $e) {

            if($e->errorInfo[1] == 1062){
                $resp = array(
                    'respuesta' => 'warning',
                    'mensaje' => 'Ya existe una sucursal con el mismo nombre',
                );
                return response()->json($resp);
            }            
        }
    }

    public function update(Request $request, Sucursal $sucursal){

        try {
            $response = $sucursal->update($request->all());
            if($response){
                $resp = array(
                    'respuesta' => 'success',
                    'mensaje' => 'El regsitro se editó exitósamente'
                );
            }
            return response()->json($resp);

        } catch (QueryException $e) {
            if($e->errorInfo[1] == 1062){
                $resp = array(
                    'respuesta' => 'warning',
                    'mensaje' => 'Ya existe una sucursal con el mismo nombre',
                );
                return response()->json($resp);
            }          
        }
        
        return response()->json($sucursal, 200);
    }

    public function delete(Sucursal $sucursal){
        
        try {
            $response = $sucursal->delete();
            if($response){
                $resp = array(
                    'respuesta' => 'success',
                    'mensaje' => 'El regsitro se eliminó exitósamente'
                );
            }
            return response()->json($resp);
        } catch (QueryException $e) {
         
        }
        //return response()->json(null, 204);
    }
}
