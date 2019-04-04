<?php

namespace App\Http\Controllers;

use App\period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function index()
    {
        return view('admin.period.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'name'     =>  'required',
                'period'   =>  'required',
            ]);

        if (Request::ajax()) {
            $period::create($data);
            return Response::json(['info'=>'Creado con exito!'],200);
        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }

    public function show(period $period)
    {
        
    }

    public function edit(period $period)
    {
        //
    }

    public function update(Request $request, period $period)
    {
        $data = request()->validate(
        [
            'name'    =>  'required',
            'period'  =>  'required',
        ]);

        if (Request::ajax()) {
            $period::update($data);
            return Response::json(['info'=>'Actualizado con exito!'],200);
        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }

    public function destroy(period $period)
    {
        if (Request::ajax()) {
            $period::delete();
        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }
}
