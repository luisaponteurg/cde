<?php

namespace App\Http\Controllers;

use App\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
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
            'name'          =>  'required',
            'code_internal' =>  'required',
            'area_id'       =>  'required',
            'modality_id'   =>  'required'
        ]);

        if (request()->ajax()) {

            if (Career::create($data)) {
                return Response::json(['info'=>'Creado con exito!'],200);
            }

        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }

    public function show(Career $career)
    {
        //
    }

    public function edit(Career $career)
    {
        //
    }

    public function update(Request $request, Career $career)
    {
        $data = request()->validate(
        [
            'name'          =>  'required',
            'code_internal' =>  'required',
            'area_id'       =>  'required',
            'modality_id'   =>  'required'
        ]);

        if (Request::ajax()) {
            $career::update($data);
            return Response::json(['info'=>'Actualizado con exito!'],200);
        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }

    public function destroy(Career $career)
    {
        if (Request::ajax()) {
            $career::delete();
            return Response::json(['info'=>'Eliminado con exito!'],200);
        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }
}
