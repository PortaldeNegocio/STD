<?php

namespace STD\Http\Controllers;

use Illuminate\Http\Request;
use STD\Cliente;
use STD\Telefono;

class ClienteController extends Controller
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
    public function index( Request $request)
    {
        $clientes = Cliente::orderBy('id', 'DESC')->paginate(500);
         
        if($request -> ajax()){
            return response()->json(view('pages.cliente._table', compact('clientes'))->render());            
        }
        return view('pages.cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        $cliente = new Cliente;
        if($request -> ajax()){
            return response()->json(view('pages.cliente._form', compact('cliente'))->render());}
        
        return view('pages.cliente.show', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){ 
        $cliente = new Cliente;      
        $cliente->TipoDocumento = $request->TipoDocumento;
        $cliente->NumeroDocumento = $request->NumeroDocumento;
        $cliente->Nombre = $request->Nombre;
        $cliente->Apellido = $request->Apellido;
        $cliente->save();

        if(!is_null($request->StrTelefonos)){
            foreach (json_decode($request->StrTelefonos, true) as $fono) {

                if(is_null($fono['id']) || ($fono['id'])=="undefined" ){
                    
                    if($fono['deleted']=='false'){
                        $newTelefono = new Telefono;
                        $newTelefono->TipoTelefono = $fono['tipo'];
                        $newTelefono->Numero = $fono['dato'];
                        $newTelefono->cliente_id = $cliente->id;
                        $newTelefono->save();
                    };
                };
            };
        };

       // return response()->json(['message' => $request->Telefonos]);
        return redirect('cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \STD\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return response()->json($cliente);
        //return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \STD\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id){
        $cliente = Cliente::find($id);
        if($request -> ajax()){
            return response()->json(view('pages.cliente._form', compact('cliente'))->render());
        }
      
        return view('pages.cliente.show', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \STD\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $cliente = Cliente::find($id);
        
        $cliente->TipoDocumento = $request->TipoDocumento;
        $cliente->NumeroDocumento = $request->NumeroDocumento;
        $cliente->Nombre = $request->Nombre;
        $cliente->Apellido = $request->Apellido;

        $cliente->save();

        if(!is_null($request->StrTelefonos)){
            foreach (json_decode($request->StrTelefonos, true) as $fono) {

                if(is_null($fono['id']) || ($fono['id'])=="undefined" ){
                    
                   // dd("is null id true "+$fono['id']);
                    
                    if($fono['deleted']=='false'){
                        $newTelefono = new Telefono;
                        $newTelefono->TipoTelefono = $fono['tipo'];
                        $newTelefono->Numero = $fono['dato'];
                        $newTelefono->cliente_id = $cliente->id;
                        $newTelefono->save();
                    };
                }else{
                  //dd("else is null id true ");
                    
                    $telefono = Telefono::find($fono['id']);
                    if(($fono['deleted'])=='true'){
                    
                         $telefono->delete();
                    }else{
                        $telefono->TipoTelefono = $fono['tipo'];
                        $telefono->Numero = $fono['dato'];
                        $telefono->save();
                    };
                };
            };
        };

       //  return response()->json($cliente);
        return redirect()->route('cliente.index')->with('info', 'El cliente fue actualizado') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \STD\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }

    public function destroyByAjax(Request $request, $id)
    {
        if($request -> ajax()){
            $cliente = Cliente::find($id);

            foreach ($cliente->telefonos as $fono) {
                $fono->delete();
            };

            $cliente->delete();

            $totalClientes = Cliente::all()->count();

            return response()->json([
                'total' => $totalClientes,
                'message' => $cliente->Nombre . ' Fue eliminado correctamente'
                ]);
        }
    }
}
