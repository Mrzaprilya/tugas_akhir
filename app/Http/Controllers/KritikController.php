<?php

namespace App\Http\Controllers;

use App\Models\Kritik;
use Illuminate\Http\Request;

class KritikController extends Controller
{
    // Menampilkan form kritik dan daftar kritik yang ada
    public function index()
    {
        $kritiks = Kritik::all();  // Mendapatkan semua kritik dan saran
        return view('kritik', compact('kritiks'));
    }

    // Menyimpan kritik dan saran
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string|max:1000',
        ]);

        // Simpan kritik ke database
        Kritik::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('kritik.index')->with('success', 'Kritik Anda berhasil dikirim!');
    }

    // Menampilkan form untuk mengedit kritik dan saran
    public function edit($id)
    {
        $kritik = Kritik::findOrFail($id);  // Mencari kritik berdasarkan ID
        return view('edit_kritik', compact('kritik'));
    }

    // Memperbarui kritik dan saran
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string|max:1000',
        ]);

        // Cari kritik berdasarkan ID
        $kritik = Kritik::findOrFail($id);

        // Update kritik dan saran
        $kritik->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        // Redirect setelah berhasil update
        return redirect()->route('kritik.index')->with('success', 'Kritik Anda berhasil diperbarui!');
    }

    // Menghapus kritik dan saran
    public function destroy($id)
    {
        $kritik = Kritik::findOrFail($id);
        $kritik->delete();

        return redirect()->route('kritik.index')->with('success', 'Kritik Anda berhasil dihapus!');
    }
}
