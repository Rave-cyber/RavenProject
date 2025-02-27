<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flowers = Flower::all();
        return view('flowers.index', compact('flowers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flowers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Flower::create($request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]));
        return redirect()->route('flowers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('flowers.edit', compact('flower'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flower $flower)
    {
        return view('flowers.edit', compact('flower'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flower $flower)
    {
        $flower->update($request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]));
        return redirect()->route('flowers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flower $flower) // ✅ Now correctly inside the class
    {
        $flower->delete();
        return redirect()->route('flowers.index')->with('success', 'Flower deleted successfully.');
    }
}
