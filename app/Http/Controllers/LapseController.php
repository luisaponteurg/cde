<?php

namespace App\Http\Controllers;

use App\Lapse;
use App\Type_lapse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class LapseController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$type_lapses = Type_lapse::all();
		return view('admin.lapso.index')->with('type_lapses', $type_lapses);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$data = request()->validate([
			'type_lapse_id'   	=>  'required',
			'start_date'    	=>  'required',
			'completion_date'   =>	'required'
		]);

		if (request()->ajax()) {

			if (Lapse::create($data)) {
				return Response::json(['info'=>'Creado con exito!'],200);
			}

		}else{
			return Response::json(['info'=>'Error!'],400);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Lapse  $lapse
	 * @return \Illuminate\Http\Response
	 */
	public function show(Lapse $lapse)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Lapse  $lapse
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Lapse $lapse)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Lapse  $lapse
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Lapse $lapse)
	{
		$data = request()->validate([
			'type_lapse_id'   	=>  'required',
			'start_date'    	=>  'required',
			'completion_date'   =>	'required'
		]);

		if (request()->ajax()) {

			if (Lapse::create($data)) {
				return Response::json(['info'=>'Creado con exito!'],200);
			}

		}else{
			return Response::json(['info'=>'Error!'],400);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Lapse  $lapse
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Lapse $lapse)
	{
		//
	}
}
