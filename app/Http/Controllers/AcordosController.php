<?php

namespace App\Http\Controllers;

use App\Models\Acordos;
use Illuminate\Http\Request;

class AcordosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'Rota funcionando';
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
     * @param  \App\Models\Acordos  $acordos
     * @return \Illuminate\Http\Response
     */
    public function show(Acordos $acordos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acordos  $acordos
     * @return \Illuminate\Http\Response
     */
    public function edit(Acordos $acordos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acordos  $acordos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acordos $acordos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acordos  $acordos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acordos $acordos)
    {
        //
    }
}
