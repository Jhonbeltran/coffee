<?php

namespace Coffee\Http\Controllers;

use Illuminate\Http\Request;

use Coffee\Http\Requests;

use Coffee\Labor;

use Illuminate\Support\Facades\DB;

class PrintController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = DB::table('labors')
            ->join('productors', 'productors.id', '=', 'labors.productor_id')
            ->join('ubicacions', 'ubicacions.id', '=', 'labors.ubicacion_id')
            ->join('variedads', 'variedads.id', '=', 'labors.variedad_id')
            ->join('especies', 'especies.id', '=', 'labors.especie_id')
            ->join('operadors', 'operadors.id', '=', 'labors.operador_id')
            ->select('labors.*', 'labors.id', 'productors.nombre AS nombreProductor', 'ubicacions.direccion AS direccion', 'variedads.nombre AS nombreVariedad', 'especies.nombre AS nombreEspecie', 'operadors.nombre AS nombreOperador', 'labors.fecha', 'labors.plantas', 'labors.actividad', 'labors.jornales', 'labors.valor_jornales', 'labors.valor_insumos', 'labors.observaciones')
            ->get();

        return view('imprimir.index', ['results'=>$results]);
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
    public function edit($id)
    {
        //
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
