<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use Illuminate\Http\Request;

class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['maestros'] = Maestro::All();
        return view('maestro.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('maestro.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $maestroDato = request()->except('_token');
        Maestro::insert($maestroDato);
        return redirect()->route('maestro.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Maestro $maestro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $maestro = Maestro::findOrFail($id);
        return view('maestro.edit', compact('maestro'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $maestroDato = request()->except('_token', '_method');
        Maestro::where('id', '=', $id)->update($maestroDato);
        return redirect('maestro');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Maestro::destroy($id);
        return redirect('maestro');
    }
}