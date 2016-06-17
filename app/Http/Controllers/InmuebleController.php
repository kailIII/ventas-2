<?php

namespace Ventas\Http\Controllers;

use Illuminate\Http\Request;
use Ventas\Http\Requests;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forminmueble');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inmueble = new \Ventas\Inmueble();
        
        $inmueble->inmu_nomb = $request->text_nomb;
        $inmueble->inmu_desc = $request->tear_desc;
        $inmueble->inmu_valo = $request->text_valo;
        $inmueble->inmu_tine = $request->radi_tipo;
        $inmueble->inmu_npla = $request->numb_npla;
        $inmueble->inmu_fech = $request->date_fech;
        $inmueble->inmu_nhab = $request->numb_habi;
        $inmueble->inmu_nban = $request->numb_bano;
        $inmueble->inmu_npar = $request->numb_parq;
        $inmueble->inmu_npis = $request->numb_piso;
        $inmueble->inmu_m2c  = $request->numb_m2c;
        $inmueble->inmu_m2nc = $request->numb_m2nc;
        $inmueble->inmu_terr = $request->chec_terr;
        $inmueble->inmu_estr = $request->sele_estr;
        $inmueble->inmu_agua = $request->chec_agua;
        $inmueble->inmu_luz = $request->chec_ener;
        $inmueble->inmu_gas  = $request->chec_gas;
        $inmueble->inmu_tele = $request->chec_tele;
        $inmueble->inmu_bbq  = $request->chec_bbq;
        $inmueble->inmu_prop = $request->radi_prop;
        
        $inmueble->save();
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
