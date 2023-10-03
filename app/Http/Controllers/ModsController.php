<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModRequest;
use App\Models\Mod;
use Illuminate\Http\Request;

class ModsController extends Controller
{

    public function index()
    {
        $mods = Mod::all(); // Fetch all mods from the database.

        return view('mods.index', compact('mods'));
    }



    public function show($id)
    {
        $mod = Mod::find($id); // Gets the mods compared to the ID

        return view('mods.show', compact('mod'));
    }



    public function create()
    {
        return view('mods.create');
    }
    public function store(ModRequest $request)
    {

        // saves new mods in the database <= No mass assignment
//        $mod = new Mod;
//        $mod->title = $validatedData['title'];
//        $mod->creator = $validatedData['creator'];
//        $mod->version = $validatedData['version'];
//        $mod->save();

        Mod::create($request->validated()); // mass assignment

        // Will send a success message and send you back to te index page
        return redirect()->route('mods.index')->with('success', 'Mod good saved');
    }

    public function edit($index)
    {

        $mod = $this->mods[$index] ?? null;
        return view('mods.edit', compact('mod'));
    }


    public function update(ModRequest $request, $id)
    {
        // Find the mod by ID
        $mod = Mod::findOrFail($id)->update($request->validated());

        // Redirect back to the mod list with a success message
        return redirect()->route('mods.index')->with('success', 'Mod updated successfully.');
    }



    public function destroy($id)
    {
        // Find the mod by ID
        $mod = Mod::find($id);

        if (!$mod) {
            // Handle the case where the mod is not found
            return redirect()->route('mods.index')->with('error', 'Mod not found.');
        }

        // Delete the mod
        $mod->delete();

        // Redirect back to the mod list with a success message
        return redirect()->route('mods.index')->with('success', 'Mod deleted successfully.');
    }
}
