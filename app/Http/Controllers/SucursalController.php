<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        
        $sucursal = Sucursal::create($request->all());
        return response()->json($sucursal, 201);
    }

    public function update(Request $request, Sucursal $sucursal){
        $sucursal->update($request->all());
        return response()->json($sucursal, 200);
    }

    public function delete(Sucursal $sucursal){
        $sucursal->delete();
        return response()->json(null, 204);
    }
}
