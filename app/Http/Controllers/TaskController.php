<?php

namespace Coffee\Http\Controllers;

use Illuminate\Http\Request;

use Coffee\Http\Requests;

use Coffee\Labor;

use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labors = Labor::All();
        return view('labor.index', compact('labors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productors = DB::table('productors')->get();
        $ubicacions = DB::table('ubicacions')->get();
        $variedads = DB::table('variedads')->get();
        $especies = DB::table('especies')->get();
        $operadors = DB::table('operadors')->get();
        return view('labor.create', ['productors' => $productors, 'ubicacions' => $ubicacions, 'variedads' => $variedads, 'especies' => $especies, 'operadors' => $operadors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Labor::create([
            'productor_id' => $request['productor_id'],
            'ubicacion_id' => $request['ubicacion_id'],
            'variedad_id' => $request['variedad_id'],
            'especie_id' => $request['especie_id'],
            'operador_id' => $request['operador_id'],
            'fecha' => $request['fecha'],
            'plantas' => $request['plantas'],
            'actividad' => $request['actividad'],
            'jornales' => $request['jornales'],
            'valor_jornales' => $request['valor_jornales'],
            'valor_insumos' => $request['valor_insumos'],
            'ubicacion_id' => $request['ubicacion_id'],
            'observaciones' => $request['observaciones']
            ]);

        return redirect('labor')->with('message', 'store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

        $results = DB::table('labors')
            ->join('productors', 'productors.id', '=', 'labors.productor_id')
            ->join('ubicacions', 'ubicacions.id', '=', 'labors.ubicacion_id')
            ->join('variedads', 'variedads.id', '=', 'labors.variedad_id')
            ->join('especies', 'especies.id', '=', 'labors.especie_id')
            ->join('operadors', 'operadors.id', '=', 'labors.operador_id')
            ->select('labors.*', 'labors.id', 'productors.nombre AS nombreProductor', 'variedads.nombre AS nombreVariedad')
            ->get();

        return view('labor.show', ['results'=>$results]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $labor = Labor::find($id);
        $productors = DB::table('productors')->get();
        $ubicacions = DB::table('ubicacions')->get();
        $variedads = DB::table('variedads')->get();
        $especies = DB::table('especies')->get();
        $operadors = DB::table('operadors')->get();
        return view('labor.edit',['labor'=>$labor, 'productors' => $productors, 'ubicacions' => $ubicacions, 'variedads' => $variedads, 'especies' => $especies, 'operadors' => $operadors]);
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
        $labor = Labor::find($id);
        $labor->fill($request->all());
        $labor->save();

        return redirect('labor')->with('message', 'edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Labor::destroy($id);
        return redirect('labor')->with('message', 'delete');
    }
}
