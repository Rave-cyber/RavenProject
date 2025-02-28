<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;

class FlowerController extends Controller
{
    public function index()
    {
        $flowers = Flower::all();
        return view('flowers.index', compact('flowers'));
    }

    public function create()
    {
        return view('flowers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Flower::create($request->all());
        return redirect()->route('flowers.index')->with('success', 'Flower added successfully');
    }

    public function show(Flower $flower)
    {
        return view('flowers.show', compact('flower'));
    }

    public function edit(Flower $flower)
    {
        return view('flowers.edit', compact('flower'));
    }

    public function update(Request $request, Flower $flower)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $flower->update($request->all());
        return redirect()->route('flowers.index')->with('success', 'Flower updated successfully');
    }

    public function destroy(Flower $flower)
    {
        $flower->delete();
        return redirect()->route('flowers.index')->with('success', 'Flower deleted successfully');
    }
}
