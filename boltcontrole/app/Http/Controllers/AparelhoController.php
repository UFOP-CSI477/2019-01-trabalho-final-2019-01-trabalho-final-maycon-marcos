<?php

namespace App\Http\Controllers;

use App\Aparelho;
use App\Comodo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AparelhoController extends Controller
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
    public function index()
    {

        $aparelhos = Aparelho::where('user_id', Auth::user()->id)->orderBy('nome')->get();
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
        $comodos = Comodo::orderBy('nome')->get();
        return view('aparelhos.edit')
                ->with("aparelho", $aparelho)
                ->with('comodos', $comodos);
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
        $aparelho->fill($request->all());

        $aparelho->save();

        session()->flash('mensagem', 'Aparelho atualizado com sucesso!');

        return redirect()->route('aparelhos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aparelho  $aparelho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aparelho $aparelho)
    {
        $aparelho->delete();
        session()->flash('mensagem', 'Aparelho excluído com sucesso!');

        return redirect()->route('aparelhos.index');
    }
}
