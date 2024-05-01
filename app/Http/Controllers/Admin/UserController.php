<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Tujuan;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
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

    public function store(UserStoreRequest $request)
    {
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'roles_id' => $request->roles_id,
            'permissions' => $request->permissions
        ]);

        if ($request->hasFile('foto_user')) {
            $foto_user = $request->foto_user;
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
        $tujuans = Tujuan::all();
        return view('admin.user.edit', compact('user', 'tujuans'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        if ($request->password == null) {
            $user = User::where('id', $id)->first();
            $user->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'roles_id' => $request->roles_id,
                'permissions' => $request->permissions
            ]);
        } else {
            $user = User::where('id', $id)->first();
            $user->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'roles_id' => $request->roles_id,
                'permissions' => $request->permissions
            ]);
        }

        if ($request->hasFile('foto_user')) {
            $foto_user = $request->foto_user;
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
