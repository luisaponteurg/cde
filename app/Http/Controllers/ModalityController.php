<?php

namespace App\Http\Controllers;

use App\Modality;
use Illuminate\Http\Request;

class ModalityController extends Controller
{
    public function index()
    {
        $modalidades = Modality::orderBy('id','DESC')->paginate(10);
        return $modalidades;
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
            'opsu'      =>  'required', 
            'finished'  =>  'required'
        ]);

        if (request()->ajax()) {

            if (modality::create($data)) {
                return Response::json(['info'=>'Creado con exito!'],200);
            }

        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }

    public function show(Modality $modality)
    {
        //
    }

    public function edit(Modality $modality)
    {
        //
    }

    public function update(Request $request, Modality $modality)
    {
        $data = request()->validate(
        [
            'name'      =>  'required', 
            'opsu'      =>  'required', 
            'finished'  =>  'required'
        ]);

        if (Request::ajax()) {
            $modality::update($data);
            return Response::json(['info'=>'Actualizado con exito!'],200);
        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }

    public function destroy(Modality $modality)
    {
        if (Request::ajax()) {
            $modality::delete();
            return Response::json(['info'=>'Eliminado con exito!'],200);
        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }
}
