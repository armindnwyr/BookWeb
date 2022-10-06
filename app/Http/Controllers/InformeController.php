<?php

namespace App\Http\Controllers;

use App\Models\informe;
use Illuminate\Http\Request;

class InformeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('informe.index');
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
     * @param  \App\Models\informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function show(informe $informe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function edit(informe $informe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, informe $informe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function destroy(informe $informe)
    {
        //
    }
}
