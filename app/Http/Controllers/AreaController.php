<?php

namespace App\Http\Controllers;

use App\area;
use Illuminate\Http\Request;

class AreaController extends Controller
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
            'name'      =>  'required',
            'phone'     =>  'required',
        ]);

        if (request()->ajax()) {

            if (Area::create($data)) {
                return Response::json(['info'=>'Creado con exito!'],200);
            }

        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }

    public function show(area $area)
    {
        //
    }

    public function edit(area $area)
    {
        //
    }

    public function update(Request $request, area $area)
    {
        $data = request()->validate(
        [
            'name'      =>  'required',
            'phone'     =>  'required',
        ]);

        if (Request::ajax()) {
            $area::update($data);
            return Response::json(['info'=>'Actualizado con exito!'],200);
        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }

    public function destroy(area $area)
    {
        if (Request::ajax()) {
            $area::delete();
            return Response::json(['info'=>'Eliminado con exito!'],200);
        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }
}
