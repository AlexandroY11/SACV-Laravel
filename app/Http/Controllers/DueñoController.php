<?php

namespace App\Http\Controllers;

use App\Models\Dueño;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DueñoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dueños = Dueño::all();

        return view('dueños.index', compact('dueños'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
             
        return view('dueños.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dueños = Dueño::create($request->all());

        return redirect()->route('dueños.index', compact('dueños'));
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
    public function edit(Dueño $dueño)
    {
        return view('dueños.edit', compact('dueño'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dueño $dueño)
    {
        $dueño->update($request ->all());
        return redirect()->route('dueños.index', $dueño);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dueño= Dueño::find($id);
        $dueño->delete();
        return redirect()->route('dueños.index', $dueño);
    }
}
