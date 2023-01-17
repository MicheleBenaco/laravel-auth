<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTecnologyRequest;
use App\Http\Requests\UpdateTecnologyRequest;
use App\Models\Tecnology;

class TecnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnologies = Tecnology::all();
        return view('admin.tecnology.index', compact('tecnologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tecnology.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTecnologyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTecnologyRequest $request)
    {
        $data = $request->validated();
        $slug = Tecnology::createSlug($request->name);
        $data['slug'] = $slug;
        $new_project = Tecnology::create($data);
       return redirect()->route('admintecnologies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tecnology  $tecnology
     * @return \Illuminate\Http\Response
     */
    public function show(Tecnology $tecnology)
    {
           return view('admin.tecnology.show', compact('tecnology'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tecnology  $tecnology
     * @return \Illuminate\Http\Response
     */
    public function edit(Tecnology $tecnology)
    {
        return view('admin.tecnology.edit', compact('tecnology'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTecnologyRequest  $request
     * @param  \App\Models\Tecnology  $tecnology
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTecnologyRequest $request, Tecnology $tecnology)
    {
        $data = $request->validated();
        $slug = Tecnology::createSlug($request->name);
        $data['slug'] = $slug;
        $tecnology->update($data);
        return redirect()->route('admintecnologies.index')->with('message', " Tecnologia $tecnology->name aggiornata");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tecnology  $tecnology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tecnology $tecnology)
    {
        $tecnology->delete();
        return redirect()->route('admintecnologies.index')->with('message', " Tecnologia $tecnology->name eliminata con successo");
    }
}
