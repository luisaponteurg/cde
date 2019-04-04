<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class BankController extends Controller
{
    public function index(Request $request)
    {
        $banks = Bank::all();
        return $banks;
        //return view('admin.bank.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $bank = new Bank();
        $bank->name = $request->name;
        $bank->save();
        /*$data = request()->validate(
        [
            'name'     =>  'required',
        ]);

        if (request()->ajax()) {

            if (Bank::create($data)) {
                return Response::json(['info'=>'Creado con exito!'],200);
            }

        }else{
            return Response::json(['info'=>'Error!'],400);
        }*/
    }

    public function show(Bank $bank)
    {
        //
    }

    public function edit(Bank $bank)
    {
        //
    }

    public function update(Request $request)
    {
        $bank = Bank::findOrFail($request->id);
        $bank->name = $request->name;
        $bank->save();
        /*$data = request()->validate(
        [
            'name'    =>  'required',
        ]);

        if (Request::ajax()) {
            $bank::update($data);
            return Response::json(['info'=>'Actualizado con exito!'],200);
        }else{
            return Response::json(['info'=>'Error!'],400);
        }*/
    }

    public function destroy(Bank $bank)
    {
        if (Request::ajax()) {
            $bank::delete();
        }else{
            return Response::json(['info'=>'Error!'],400);
        }
    }
}
