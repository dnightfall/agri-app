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
        $validatedData = $request->validate([
            'seed_name' => 'required|string|max:255',
            'planting_date' => 'required|date',
            'tray_count' => 'required|integer', // Validasi untuk tray_count
        ]);

        Seedling::create($validatedData);

        return redirect()->route('seedlings.index')->with('success', 'Data bibit berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        // Temukan data bibit berdasarkan ID
        $seedling = Seedling::findOrFail($id);
        
        // Hapus data bibit dari database
        $seedling->delete();
    
        // Redirect kembali ke halaman rekap dengan pesan sukses
        return redirect()->route('seedlings.index')->with('success', 'Data bibit berhasil dihapus.');
    }
    

    public function rekap()
    {
        $seedlings = Seedling::where('completed', true)->get();
        return view('seedlings.rekap', compact('seedlings'));
    }
    public function complete($id)
    {
        $seedling = Seedling::find($id);
        if ($seedling) {
            // Tandai bibit sebagai selesai atau lakukan tindakan yang diinginkan
            $seedling->completed = true; // Contoh, tambahkan kolom 'completed' di database
            $seedling->save();
        }

        return redirect()->route('seedlings.index');
    }
    public function show($id)
{
    $seedling = Seedling::findOrFail($id);
    return view('seedlings.show', compact('seedling'));
}

}
