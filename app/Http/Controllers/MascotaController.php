<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $mascotas = Mascota::all();

        $mascotas = DB::table('mascotas')
            ->join('dueños', 'mascotas.dueño_id', '=', 'dueños.id')
            ->select('mascotas.*', DB::raw("CONCAT(dueños.nombre, ' ', dueños.apellido) as nombre_dueño"))
            ->get();

        return view('mascotas.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dueños = DB::table('dueños')
            ->orderBy('nombre')
            ->orderBy('apellido')
            ->get();
        return view('mascotas.create', compact('dueños'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mascota = Mascota::create($request->all());

        $mascotas = DB::table('mascotas')
            ->join('dueños', 'mascotas.dueño_id', '=', 'dueños.id')
            ->select('mascotas.*', DB::raw("CONCAT(dueños.nombre, ' ', dueños.apellido) as nombre_dueño"))
            ->get();

        return redirect()->route('mascotas.index',compact('mascotas'));
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mascota = Mascota::find($id);
        $mascota->delete();

        $mascotas = DB::table('mascotas')
            ->join('dueños', 'mascotas.dueño_id', '=', 'dueños.id')
            ->select('mascotas.*', DB::raw("CONCAT(dueños.nombre, ' ', dueños.apellido) as nombre_dueño"))
            ->get();

        return redirect()->route('mascotas.index',compact('mascotas'));
    }
}
