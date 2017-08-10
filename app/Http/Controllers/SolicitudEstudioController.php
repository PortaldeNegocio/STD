<?php

namespace STD\Http\Controllers;

use Illuminate\Http\Request;
use STD\Http\Controllers\Controller;
use STD\SolicitudEstudio;
use STD\Provincia;
use STD\Canton;
use STD\Parroquia;

class SolicitudEstudioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view ('pages.solicitud.index');

        // $solicitudEstudios = SolicitudEstudio::all();
         
        // if($request -> ajax()){
        //     return response()->json(view('pages.solicitud._table', compact('solicitudEstudios'))->render());            
        // }
        // return view('pages.solicitud.index', compact('solicitudEstudios'));
    }

    public function getSolicitudes($estado)
    {
        //$solicitudEstudios = SolicitudEstudio::with(['cliente'])->->get();
        $solicitudEstudios = SolicitudEstudio::where('Estado', $estado)->with(['cliente'])->get();
        return $solicitudEstudios;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $solicitud = new SolicitudEstudio;
        $provincia = Provincia::pluck('provincia','id')->all();
        $cantones = [];
        $parroquias = [];

        if($request -> ajax()){
            return response()->json(
                                view('pages.solicitud._form', 
                                    compact('solicitud', 'provincia', 'cantones', 'parroquias'))->render());}
        
        return view('pages.solicitud.show', compact('solicitud', 'provincia', 'cantones', 'parroquias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $solicitud = SolicitudEstudio::find($id);
        $provincia = Provincia::pluck('provincia','id')->all();


        $cantones=Canton::where('provincia_id', $solicitud->parroquia->canton->provincia->id)->pluck('canton','id')->all();
        $parroquias=Parroquia::where('canton_id', $solicitud->parroquia->canton->id)->pluck('parroquia','id')->all();

        if($request -> ajax()){
            return response()->json(
                                view('pages.solicitud._form', 
                                    compact('solicitud','provincia','cantones', 'parroquias'))->render());
        }
      
        return view('pages.solicitud.show', compact('solicitud','provincia','cantones', 'parroquias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
