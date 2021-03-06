<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;


class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::latest()->paginate(5);
  
        return view('pets.index',compact('pets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'animal_type' => 'required',
            'owner' => 'required',
            'address' => 'required'
        ]);
        
        Pet::create($request->all());
   
        return redirect()->route('pets.index')
                        ->with('success','Pet created successfully.');
    }

    public function show(Pet $pet)
    {
        return view('pets.show',compact('pet'));
    }

    public function edit(Pet $pet)
    {
        return view('pets.edit',compact('pet'));
    }


    public function update(Request $request, Pet $pet)
    {
        $request->validate([
            'name' => 'required',
            'animal_type' => 'required',
            'owner' => 'required',
            'address' => 'required'
        ]);
  
        $pet->update($request->all());

        return redirect()->route('pets.index')
                        ->with('success','Pet updated successfully');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();
  
        return redirect()->route('pets.index')
                        ->with('success','Pets deleted successfully');
    }
}
