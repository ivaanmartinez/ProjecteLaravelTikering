<?php

namespace App\Http\Controllers;
use App\Models\Animal;
use Illuminate\Http\Request;
class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact('animals'));
    }
    public function create()
    {
        return view('animals.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'especie' => 'required',
            'pais' => 'required',
            'poblacio' => 'required',
            'amenaca' => 'required',
            'estat' => 'required',
        ]);
        Animal::create($request->all());
        return redirect()->route('animals.index')->with('success', 'Animal created successfully.');
    }
    public function show(Animal $animal)
    {
        return view('animals.show', compact('animal'));
    }
    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal'));
    }
    public function update(Request $request, Animal $animal)
    {
        $request->validate([
            'especie' => 'required',
            'pais' => 'required',
            'poblacio' => 'required',
            'amenaca' => 'required',
            'estat' => 'required',
        ]);
        $animal->update($request->all());
        return redirect()->route('animals.index')->with('success', 'Animal updated successfully.');
    }
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animals.index')->with('success', 'Animal deleted successfully.');
    }
}
