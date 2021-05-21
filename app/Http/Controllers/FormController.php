<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{

    public function getForms(Request $request, Article $article)
    {
        $data = $article->getData();
        return \DataTables::of($data)
            ->addColumn('Actions', function($data) {
                return '<button type="button" class="btn btn-success btn-sm" id="getEditArticleData" data-id="'.$data->id.'">Edit</button>
                    <button type="button" data-id="'.$data->id.'" data-toggle="modal" data-target="#DeleteArticleModal" class="btn btn-danger btn-sm" id="getDeleteId">Delete</button>';
            })
            ->rawColumns(['Actions'])
            ->make(true);
    }

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

        return view('form.form')->with('message', 'The success message!');
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
    public function destroy($id)
    {
        //
        ddd($id);
        $article = new Form;
        $article->deleteData($id);

        return response()->json(['success'=>'Article deleted successfully']);
    }
}
