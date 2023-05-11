<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8',
                'roles_id' => 'required'
            ],
            [
                'nama.required' => 'Nama User tidak boleh kosong',
                'nama.max' => 'Nama User tidak boleh lebih dari 255 karakter',
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password tidak boleh kurang dari 8 karakter',
                'roles_id.required' => 'Role tidak boleh kosong'
            ]
        );

        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'roles_id' => $request->roles_id
        ]);

        $validasi = $request->validate(
            [
                'foto_user' => 'mimes:jpg,bmp,png,svg,jpeg|max:2048'
            ],
            [
                'foto_user.image' => 'Foto User harus berupa gambar',
                'foto_user.mimes' => 'Foto User harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
                'foto_user.max' => 'Foto User tidak boleh lebih dari 2MB'
            ]
        );

        if ($request->hasFile('foto_user')) {
            $foto_user = $validasi[('foto_user')];
            $user->foto_user = time() . '_' . $foto_user->getClientOriginalName();
            $user->update();
            $foto_user->move('../public/assets/profile/', time() . '_' . $foto_user->getClientOriginalName());
        }

        if (auth()->user()->roles_id == 1) {
            return redirect('super/user')->with('sukses', 'Berhasil Tambah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/user')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        return view('admin.user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama' => 'required|max:255',
                'email' => 'required|email|unique:users,email,' . $id,
                'roles_id' => 'required'
            ],
            [
                'nama.required' => 'Nama User tidak boleh kosong',
                'nama.max' => 'Nama User tidak boleh lebih dari 255 karakter',
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'roles_id.required' => 'Role tidak boleh kosong'
            ]
        );

        if ($request->password == null) {
            $user = User::where('id', $id)->first();
            $user->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'roles_id' => $request->roles_id
            ]);
        } else {
            $user = User::where('id', $id)->first();
            $user->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'roles_id' => $request->roles_id
            ]);
        }

        $validasi = $request->validate(
            [
                'foto_user' => 'mimes:jpg,bmp,png,svg,jpeg|max:2048'
            ],
            [
                'foto_user.image' => 'Foto User harus berupa gambar',
                'foto_user.mimes' => 'Foto User harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
                'foto_user.max' => 'Foto User tidak boleh lebih dari 2MB'
            ]
        );

        if ($request->hasFile('foto_user')) {
            $foto_user = $validasi[('foto_user')];
            $user->foto_user = time() . '_' . $foto_user->getClientOriginalName();
            $user->update();
            $foto_user->move('../public/assets/profile/', time() . '_' . $foto_user->getClientOriginalName());
        }

        if (auth()->user()->roles_id == 1) {
            return redirect('super/user')->with('sukses', 'Berhasil Ubah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/user')->with('sukses', 'Berhasil Ubah Data!');
        }
    }

    public function destroy($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        $user->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/user')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
