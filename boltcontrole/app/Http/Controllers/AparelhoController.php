<?php

namespace App\Http\Controllers;

use App\Aparelho;
use App\Comodo;
use Illuminate\Http\Request;

class AparelhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aparelhos = Aparelho::orderBy('nome')->get();

        return view('aparelhos.index')
                ->with('aparelhos', $aparelhos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $comodos = Comodo::orderBy('nome')->get();
        return view('aparelhos.create')
                ->with('comodos', $comodos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aparelho::create($request->all());

        // Mensagem de sucesso:
        // -- Flash
        // mensagem -> campo
        session()->flash('mensagem', 'Aparelho inserido com sucesso!');

        //return redirect('/aparelhos');
        return redirect()->route('aparelhos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aparelho  $aparelho
     * @return \Illuminate\Http\Response
     */
    public function show(Aparelho $aparelho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aparelho  $aparelho
     * @return \Illuminate\Http\Response
     */
    public function edit(Aparelho $aparelho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aparelho  $aparelho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aparelho $aparelho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aparelho  $aparelho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aparelho $aparelho)
    {
        //
    }
}
