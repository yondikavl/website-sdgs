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
    
    public function getIndikator($roles_id)
{
    if ($roles_id == 3) {
        $tujuans = Tujuan::all();
        return response()->json($tujuans);
    }
    return response()->json([]);
}

    public function create()
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2) {
            $tujuans = Tujuan::all();
        } else if(auth()->user()->roles_id == 3) {
            if(auth()->user()->permissions != null){
                $tujuans = Tujuan::whereIn('id', auth()->user()->permissions)->get();
            } else {
                $tujuans = Tujuan::where('id', null)->get();
            }
        }
        return view('admin.user.create', compact('tujuans'));
    }

    public function store(UserStoreRequest $request)
    {
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'roles_id' => $request->roles_id,
            'permissions' => $request->tujuan_id,
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
    $user = User::findOrFail($id);
    $tujuans = Tujuan::all();
    $userTujuanIds = $user->permissions ?? [];

    return view('admin.user.edit', compact('user', 'tujuans', 'userTujuanIds'));
}

    public function update(UserUpdateRequest $request, $id)
{
    $user = User::findOrFail($id);

    $user->update([
        'nama' => $request->nama,
        'email' => $request->email,
        'roles_id' => $request->roles_id,
        'permissions' => $request->tujuan_id, // Storing the tujuan IDs in permissions
    ]);

    if ($request->filled('password')) {
        $user->update([
            'password' => bcrypt($request->password),
        ]);
    }

    if ($request->hasFile('foto_user')) {
        $foto_user = $request->file('foto_user');
        $filename = time() . '_' . $foto_user->getClientOriginalName();
        $foto_user->move(public_path('assets/profile'), $filename);
        $user->update(['foto_user' => $filename]);
    }

    return redirect()->route(auth()->user()->roles_id == 1 ? 'super.user.index' : 'admin.user.index')
    ->with('sukses', 'Berhasil Update Data!');
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
