<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use Session;
use Redirect;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::Tests();
        return view('test.index',compact('tests'));
    }
    public function create()
    {
        return view('test.create');
    }
    public function store(Request $request)
    {
        Test::create($request->all());
        Session::flash('message','Material visual agregado correctamente');
        return Redirect::to('/test');
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
        $test = Test::find($id);
        return view('test.edit',['test'=>$test]);
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
        $test = Test::find($id);
        $test->fill($request->all());
        $test->save();
        Session::flash('message','Material visual actualizado correctamente');
        return Redirect::to('/test');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::find($id);
        $test->delete();
        Session::flash('message','Material Eliminado correctamente');
        return Redirect::to('/test');
    }
}