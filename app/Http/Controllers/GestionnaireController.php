<?php

namespace App\Http\Controllers;

use App\Gestionnaire;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class GestionnaireController extends Controller
{
    public function list(Request $request)
    {
        $gestionnaires=Gestionnaire::all()->load(['user']);
        return Datatables::of($gestionnaires)->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$gestionnaires=Gestionnaire::all()->load(['user'])->paginate(10);
        return view('gestionnaires.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        // $this->validate(
        //     $request, [
        //         'village' => 'required|exists:villages,id',
        //     ]);
        $gestionnaire_id=$request->input('gestionnaire');
        $gestionnaire=\App\Gestionnaire::find($gestionnaire_id);
        return view('gestionnaires.create',compact('gestionnaire'));
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
        $this->validate(
            $request, [
                'nom' => 'required|string|max:50',
                'matricule' => 'required|string|max:50',
                'prenom' => 'required|string|max:50',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|string|max:50',
                // 'village' => 'required|exists:villages,id',
            ]
        );
        $this->list(null);
        return view('gestionnaires.index');
        
    }

    /**
     * Display the specified resource.
     
     * @param  \App\Gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function show(Gestionnaire $gestionnaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestionnaire $gestionnaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestionnaire $gestionnaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestionnaire $gestionnaire)
    {
        //
    }
}


