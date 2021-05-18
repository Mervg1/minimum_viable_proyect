<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.form');
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
        $arr = $request->input();
        $formulario = new Form();
        $formulario->name = $arr['name'];
        $formulario->age = $arr['age'];
        $formulario->fourWeeks = $arr['fourWeeks'];
        $formulario->mentalHealth = $arr['mentalHealth'];
        $formulario->depressed = $arr['depressed'];
        $formulario->activity = $arr['activity'];
        $formulario->workEnviroment = $arr['workEnviroment'];
        $formulario->tasks = $arr['tasks'];
        $formulario->help = $arr['help'];
        $formulario->save();

        return view('form.form');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        return view('form.table');
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
    public function destroy(Form $form)
    {
        //
        ddd($form);
        $form->delete();
        return redirect()->route('form.table');
    }
}
