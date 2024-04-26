<?php

namespace App\Http\Controllers;

use App\Models\Visita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visitas = DB::table('visitas')
            ->join('mascotas', 'visitas.mascota_id', '=', 'mascotas.id')
            ->select('visitas.*', "mascotas.nombre")
            ->get();

        return view('visitas.index', compact('visitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mascotas = DB::table('mascotas')
            ->orderBy('id')
            ->get();
        return view('visitas.create', compact('mascotas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $visitas = Visita::create($request->all());

        $visitas = DB::table('visitas')
            ->join('mascotas', 'visitas.mascota_id', '=', 'mascotas.id')
            ->select('visitas.*', "mascotas.nombre")
            ->get();

        return redirect()->route('visitas.index',compact('visitas'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visita $visita)
    {
        $mascotas = DB::table('mascotas')
            ->orderBy('id')
            ->get();
        
        return view('visitas.edit', compact('visita'), compact('mascotas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visita $visita)
    {
        $visita->update($request->all());

        $visitas = DB::table('visitas')
            ->join('mascotas', 'visitas.mascota_id', '=', 'mascotas.id')
            ->select('visitas.*', "mascotas.nombre")
            ->get();

            return redirect()->route('visitas.index',compact('visitas'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $visita = Visita::find($id);
        $visita->delete();

        $visitas = DB::table('visitas')
            ->join('mascotas', 'visitas.mascota_id', '=', 'mascotas.id')
            ->select('visitas.*', "mascotas.nombre")
            ->get();

        return redirect()->route('visitas.index',compact('visitas'));
    }
}
