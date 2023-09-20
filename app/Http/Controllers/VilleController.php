<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villes = Ville::all();
        return view ('villes.index',['villes' => $villes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('villes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required'
        ]);

        $newVille = Ville::create($data);

        return redirect(route('ville.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Ville $ville)
    {
        return view('villes.show', ['ville' => $ville]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ville $ville)
    {
        return view('villes.edit', ['ville' => $ville]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ville $ville)
    {
        $data = $request->validate([
            'nom' => 'required'
        ]);

        $ville->update($data);

        return redirect(route('ville.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ville $ville)
    {
        $ville->delete();

        return redirect(route('ville.index'));
    }
}
