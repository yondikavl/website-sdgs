<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DokumenSDGsController extends Controller
{
    // Display a listing of the documents
    public function index()
    {
        $dokumens = Dokumen::all();
        return view('admin.dokumen.index', compact('dokumens'));
    }

    // Show the form for creating a new document
    public function create()
    {
        $user = auth()->user();

        if ($user->roles_id == 1 || $user->roles_id == 2) {
            $dokumen = Dokumen::all();
        } else if ($user->roles_id == 3) {
            if ($user->permissions != null) {
                $dokumen = Dokumen::whereIn('id', $user->permissions)->get();
            } else {
                $dokumen = Dokumen::where('id', null)->get();
            }
        }
        return view('admin.dokumen.create', compact('dokumen'));
    }

    // Store a newly created document in the database
    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'gambar' => 'nullable|mimes:jpg,bmp,png,svg,jpeg|max:2048',
        'file' => 'nullable|mimes:pdf|max:5120',
    ], [
        'judul.required' => 'Judul harus diisi.',
        'judul.string' => 'Judul harus berupa teks.',
        'judul.max' => 'Judul tidak boleh lebih dari 255 karakter.',
        'gambar.mimes' => 'Gambar harus berupa file dengan format: jpg, bmp, png, svg, jpeg.',
        'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        'file.mimes' => 'File harus berupa PDF.',
        'file.max' => 'Ukuran file PDF tidak boleh lebih dari 5MB.',
    ]);

        $dokumen = new Dokumen();
        $dokumen->judul = $request->judul;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar_name = time() . '.' . $gambar->getClientOriginalExtension();
            $dokumen->gambar = $gambar_name;
            $gambar->move(public_path('assets/img'), $gambar_name);
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $dokumen->file = $file_name;
            $file->move(public_path('assets/template'), $file_name);
        }

        $dokumen->save();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/dokumen')->with('sukses', 'Dokumen berhasil diupdate.');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/dokumen')->with('sukses', 'Dokumen berhasil diupdate.');
        } else if (auth()->user()->roles_id == 3) {
            return redirect('opd/dokumen')->with('sukses', 'Dokumen berhasil diupdate.');
        }
    }

    // Show the form for editing the specified document
    public function edit($id)
    {
        $dokumen = Dokumen::where('id', $id)->firstOrFail();
        return view('admin.dokumen.edit', compact('dokumen'));
    }

    public function update(Request $request, $id)
{
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|mimes:jpg,bmp,png,svg,jpeg|max:2048',
            'file' => 'nullable|mimes:pdf|max:5120',
        ], [
            'judul.required' => 'Judul harus diisi.',
            'judul.string' => 'Judul harus berupa teks.',
            'judul.max' => 'Judul tidak boleh lebih dari 255 karakter.',
            'gambar.mimes' => 'Gambar harus berupa file dengan format: jpg, bmp, png, svg, jpeg.',
            'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
            'file.mimes' => 'File harus berupa PDF.',
            'file.max' => 'Ukuran file PDF tidak boleh lebih dari 5MB.',
        ]);

    $dokumen = Dokumen::findOrFail($id);
    $dokumen->judul = $request->judul;

    if ($request->hasFile('gambar')) {
        // Remove old image if exists
        if ($dokumen->gambar && file_exists(public_path('assets/img/' . $dokumen->gambar))) {
            unlink(public_path('assets/img/' . $dokumen->gambar));
        }
        $gambar = $request->file('gambar');
        $gambar_name = time() . '.' . $gambar->getClientOriginalExtension();
        $dokumen->gambar = $gambar_name;
        $gambar->move(public_path('assets/img'), $gambar_name);
    }

    if ($request->hasFile('file')) {
        // Remove old file if exists
        if ($dokumen->file && file_exists(public_path('assets/template/' . $dokumen->file))) {
            unlink(public_path('assets/template/' . $dokumen->file));
        }
        $file = $request->file('file');
        $file_name = time() . '.' . $file->getClientOriginalExtension();
        $dokumen->file = $file_name;
        $file->move(public_path('assets/template'), $file_name);
    }

    $dokumen->save();

    // Role-based redirection
    if (auth()->user()->roles_id == 1) {
        return redirect('super/dokumen')->with('sukses', 'Dokumen berhasil diupdate.');
    } else if (auth()->user()->roles_id == 2) {
        return redirect('admin/dokumen')->with('sukses', 'Dokumen berhasil diupdate.');
    } else if (auth()->user()->roles_id == 3) {
        return redirect('opd/dokumen')->with('sukses', 'Dokumen berhasil diupdate.');
    }
}

    public function destroy($id)
    {
        $dokumen = Dokumen::where('id', $id)->firstOrFail();
        if ($dokumen->gambar && file_exists(public_path('assets/img/' . $dokumen->gambar))) {
            unlink(public_path('assets/img/' . $dokumen->gambar));
        }

        if ($dokumen->file && file_exists(public_path('assets/template/' . $dokumen->file))) {
            unlink(public_path('assets/template/' . $dokumen->file));
        }

        $dokumen->delete();

        return redirect('super/dokumen')->with('sukses', 'Berhasil Hapus Data!');
    }
}
