<?php

namespace FlCobrancas\Http\Controllers;

use FlCobrancas\Http\Requests\TituloRequest;
use FlCobrancas\Titulo;

class TituloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Home';
        $data['titulos'] = Titulo::orderBy('id')->get();

        return view('titulos.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Cadastro de Título';

        return view('titulos.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TituloRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TituloRequest $request)
    {
        Titulo::create($request->all());

        return redirect()->route('titulos.index')->with('alert-success', 'Título cadastrado com sucesso.');
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
        $data['title'] = 'Edição de Título';
        $data['titulo'] = Titulo::find($id);

        return view('titulos.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TituloRequest $request, $id)
    {
        Titulo::find($id)->update($request->all());

        return redirect()->route('titulos.index')->with('alert-success', "Título {$id} atualizado com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Titulo::find($id)->delete();

        return redirect()->route('titulos.index')->with('alert-warning', "Título {$id} excluído com sucesso.");
    }

    /**
     * Atualiza o status do título para RECEBIDO.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function receive($id)
    {
        $titulo = Titulo::find($id);
        $titulo->status = 'RECEBIDO';
        $titulo->save();

        //return redirect()->route('titulos.index')->with('alert-success', "Título {$id} recebido com sucesso.");
        return 'RECEBIDO';
    }
}
