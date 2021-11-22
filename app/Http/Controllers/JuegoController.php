<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juego;
use Session;
use Redirect;

class JuegoController extends Controller
{
    public function index()
    {
        $juegos = Juego::Juegos();
        return view('juego.index',compact('juegos'));
    }
    public function create()
    {
        return view('juego.create');
    }
    public function store(Request $request)
    {
        Video::create($request->all());
        Session::flash('message','Material visual agregado correctamente');
        return Redirect::to('/juego');
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
        $juego = Juego::find($id);
        return view('juego.edit',['juego'=>$juego]);
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
        $juego = Juego::find($id);
        $juego->fill($request->all());
        $juego->save();
        Session::flash('message','Material visual actualizado correctamente');
        return Redirect::to('/juego');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $juego = Juego::find($id);
        $juego->delete();
        Session::flash('message','Usuario Eliminado correctamente');
        return Redirect::to('/juego');
    }
}