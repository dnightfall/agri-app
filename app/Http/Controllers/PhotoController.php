<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Seedling;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function upload($seedlingId)
    {
        $seedling = Seedling::findOrFail($seedlingId); // Ambil data bibit berdasarkan ID
        $photos = Photo::where('seedling_id', $seedlingId)->get();
        return view('photos.upload', [
            'seedling' => $seedling,  // Kirim data bibit ke tampilan
            'photos' => $photos,
        ]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'seedling_id' => 'required|exists:seedlings,id',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        // Simpan file foto
        $photoPath = $request->file('photo')->store('photos', 'public');
    
        // Simpan informasi foto ke database
        Photo::create([
            'seedling_id' => $request->seedling_id,
            'file_path' => $photoPath,
        ]);
    
        return redirect()->route('photos.upload', $request->seedling_id);
    }
    
    public function destroy($id)
{
    $photo = Photo::findOrFail($id);

    // Delete the file from storage
    Storage::delete('public/' . $photo->file_path);

    // Delete the record from the database
    $photo->delete();

    return redirect()->back();
}

public function list($seedlingId)
{
    $seedling = Seedling::findOrFail($seedlingId);
    $photos = Photo::where('seedling_id', $seedlingId)->get();

    return view('photos.list', compact('seedling', 'photos'));
}


}
