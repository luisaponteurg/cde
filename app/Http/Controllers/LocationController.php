<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = request()->validate(
        [
            'name'      =>  'required'
        ]);

        if (request()->ajax()) {

            if (Location::create($data)) {
                return Response::json(['info'=>'Creado con exito!'],200);
            }

        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }

    public function show(Location $location)
    {
        //
    }

    public function edit(Location $location)
    {
        //
    }

    public function update(Request $request, Location $location)
    {
        $data = request()->validate(
        [
            'name'      =>  'required'
        ]);

        if (Request::ajax()) {
            $location::update($data);
            return Response::json(['info'=>'Actualizado con exito!'],200);
        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }

    public function destroy(Location $location)
    {
        if (Request::ajax()) {
            $location::delete();
            return Response::json(['info'=>'Eliminado con exito!'],200);
        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }
}
