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
    public function index(Request $request)
    {
        $clientes = Cliente::orderBy('id', 'DESC')->paginate(5);
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
    public function create(Request $request)
    {
        $cliente = new Cliente;
        if($request -> ajax()){
            return response()->json(view('cliente.create', compact('cliente'))->render());            
        }
        
        return view('cliente.create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if($request-> ajax()){

 //$cliente = new Cliente($request->all());              
          //  console.log($cliente);  
            $cliente = new Cliente;      
            $cliente->TipoDocumento = $request->TipoDocumento;
            $cliente->NumeroDocumento = $request->NumeroDocumento;
            $cliente->Nombre = $request->Nombre;
            $cliente->Apellido = $request->Apellido;
            $cliente->save();

            foreach ($request->Telefonos as $fono) {
                $newTelefono = new Telefono;
                $newTelefono->TipoTelefono = $fono['tipo'];
                $newTelefono->Numero = $fono['dato'];
                $newTelefono->cliente_id = $cliente->id;
                $newTelefono->save();
                // $cliente->telefonos()->save($newTelefono);
           };

return response()->json([
                'message' => $request->Telefonos
                ]);

       //  }

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
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \STD\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        
        $cliente->TipoDocumento = $request->TipoDocumento;
        $cliente->NumeroDocumento = $request->NumeroDocumento;
        $cliente->Nombre = $request->Nombre;
        $cliente->Apellido = $request->Apellido;

        $cliente->save();
         return response()->json($cliente);
       // return redirect()->route('cliente.index')->with('info', 'El producto fue eliminado') ;

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

    public function desactivarCliente(Request $request, $id)
    {
        if($request -> ajax()){
            $cliente = Cliente::find($id);
            $cliente->delete();

            $totalClientes = Cliente::all()->count();

            return response()->json([
                'total' => $totalClientes,
                'message' => $cliente->Nombre . ' Fue eliminado correctamente'
                ]);
        }
    }
}
