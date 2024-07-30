<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seedling;

class SeedlingController extends Controller
{
    public function index()
    {
        $seedlings = Seedling::all();
        return view('seedlings.index', compact('seedlings'));
    }

    public function create()
    {
        return view('seedlings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'planting_date' => 'required|date',
            'seed_name' => 'required|string|max:255',
            'tray_count' => 'required|integer|min:1',
        ]);

        Seedling::create([
            'planting_date' => $request->planting_date,
            'seed_name' => $request->seed_name,
            'tray_count' => $request->tray_count,
        ]);

        return redirect()->route('seedlings.index');
    }

    public function destroy($id)
    {
        $seedling = Seedling::findOrFail($id);
        $seedling->delete();

        return redirect()->route('seedlings.index');
    }
}
