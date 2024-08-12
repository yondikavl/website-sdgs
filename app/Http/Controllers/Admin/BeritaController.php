<?php
namespace App\Http\Controllers\Admin;

use App\Models\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        $beritas = Berita::get();
        return view('admin.berita.create', compact('beritas'));
    }

    public function store(Request $request)
    {
        $waktu = $request->waktu_berita;
        if($waktu != null) {
            $request->validate([
                'waktu_berita' => 'date_format:d/m/Y|after_or_equal:now'
            ],[
                'waktu_berita.after_or_equal' => 'Waktu Berita Harus Lebih Dari Tanggal Hari Ini.'
            ]);
        } else {
            $waktu = date("d/m/Y");
        }

        $request->validate([
            'judul_berita' => 'required',
            'konten_berita' => 'required',
            'gambar_berita' => 'nullable|image|mimes:jpg,bmp,png,svg,jpeg|max:2048', // validate image
        ],[
            'judul_berita.required' => 'Judul Berita Tidak Boleh Kosong.',
            'konten_berita.required' => 'Konten Berita Tidak Boleh Kosong.',
        ]);

        $fix_konten = strip_tags($request->konten_berita);

        // handle file upload
        $gambar_name = null;
        if ($request->hasFile('gambar_berita')) {
            $gambar = $request->file('gambar_berita');
            $gambar_name = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('assets/img'), $gambar_name);
        }

        $slug = SlugService::createSlug(Berita::class, 'slug_berita', $request->judul_berita);

        Berita::create([
            'judul_berita' => $request -> judul_berita,
            'id_tag' => $request -> id_tag_berita,
            'konten_berita' => $fix_konten,
            'gambar_berita' => $gambar_name,
            'waktu_berita' => $waktu,
            'slug_berita' => $slug,
        ]);

        return redirect('super/berita')->with('sukses', 'Berhasil Tambah Data!');
    }

    public function show(string $id)
    {
        $berita = Berita::where('id', $id)->first();
        return view('admin.berita.show', compact('berita'));
    }

    public function edit(string $id)
    {
        $berita = Berita::where('id', $id)->first();
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, string $id)
    {
        $berita = Berita::where('id', $id)->first();
        $waktu = $request->waktu_berita;
        if($waktu != null) {
            $request->validate([
                'waktu_berita' => 'date_format:d/m/Y|after_or_equal:now'
            ],[
                'waktu_berita.after_or_equal' => 'Waktu Berita Harus Lebih Dari Tanggal Hari Ini.'
            ]);
        } else {
            $waktu = date("d/m/Y");
        }

        $request->validate([
            'judul_berita' => 'required',
            'konten_berita' => 'required',
            'gambar_berita' => 'nullable|image|mimes:jpg,bmp,png,svg,jpeg|max:2048', // validate image
        ],[
            'judul_berita.required' => 'Judul Berita Tidak Boleh Kosong.',
            'konten_berita.required' => 'Konten Berita Tidak Boleh Kosong.',
            'gambar_berita.mimes' => 'Gambar harus berupa file dengan format: jpg, bmp, png, svg, jpeg.',
            'gambar_berita.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ]);

        $fix_konten = strip_tags($request->konten_berita);

        // handle file upload
        if ($request->hasFile('gambar_berita')) {
            $gambar = $request->file('gambar_berita');
            $gambar_name = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('assets/img'), $gambar_name);
        } else {
            $gambar_name = $berita->gambar_berita; // keep the existing image if no new file is uploaded
        }

        $slug = SlugService::createSlug(Berita::class, 'slug_berita', $request->judul_berita);

        $berita->update([
            'judul_berita' => $request -> judul_berita,
            'id_tag' => $request -> id_tag_berita,
            'konten_berita' => $fix_konten,
            'gambar_berita' => $gambar_name,
            'waktu_berita' => $waktu,
            'slug_berita' => $slug,
        ]);

        return redirect('super/berita')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy(string $id)
    {
        $berita = Berita::where('id', $id)->first();
        $berita->delete();
        return redirect('super/berita')->with('sukses', 'Berhasil Hapus Data!');
    }
}
