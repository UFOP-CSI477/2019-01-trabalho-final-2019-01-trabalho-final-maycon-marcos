<?php

namespace App\Http\Controllers;

use App\Comodo;
use App\Aparelho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComodoController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
       //exceto tais funções
       // $this->middleware('auth',
      //   [ 'except' => [ 'index' ] ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $comodos = Comodo::where('user_id', Auth::user()->id)->orderBy('nome')->get();
    return view('comodos.index')
           ->with('comodos', $comodos);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  return view('comodos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Comodo::create($request->all());

      // Mensagem de sucesso:
      // -- Flash
      // mensagem -> campo
      session()->flash('mensagem', '');

      //return redirect('/aparelhos');
      return redirect()->route('comodos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comodo  $comodo
     * @return \Illuminate\Http\Response
     */
    public function show(Comodo $comodo)
    {
      return view('comodos.show')
        ->with('comodo', $comodo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comodo  $comodo
     * @return \Illuminate\Http\Response
     */
    public function edit(Comodo $comodo)
    {
      return view('comodos.edit')
              ->with('comodo', $comodo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comodo  $comodo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comodo $comodo)
    {
      $comodo->fill($request->all());

  $comodo->save();

  session()->flash('mensagem', 'Comodo atualizado com sucesso!');

  return redirect()->route('comodos.show', $comodo->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comodo  $comodo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comodo $comodo)
    {

      $aparelho=Aparelho::all();
        if ($comodo->aparelhos->sum('comodo_id')==0) {
          $comodo->delete();
          session()->flash('mensagem', 'Comodo excluído com sucesso!');

          return redirect()->route('comodos.index');
        }else{
            session()->flash('mensagem', 'Este comodo não pode ser excluido!');
          return redirect()->route('comodos.index');
        }
      }



    public function inicial(){
      return view('comodos.telainicial');
    }
  }
