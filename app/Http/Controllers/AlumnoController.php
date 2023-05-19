<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['alumnos'] = Alumno::All();
        return view('alumno.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('alumno.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $alumnoDato = request()->except('_token');
        Alumno::insert($alumnoDato);
        return redirect()->route('alumno.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $alumno = Alumno::findOrFail($id);
        return view('alumno.edit', compact('alumno'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $alumnoDato = request()->except('_token', '_method');
        Alumno::where('id', '=', $id)->update($alumnoDato);
        return redirect('alumno');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Alumno::destroy($id);
        return redirect('alumno');
    }
}