<?php

namespace App\Http\Controllers\Admin;

use App\Models\Indikator;
use App\Models\SubIndikator;
use App\Models\Pencapaian;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class PencapaianController extends Controller
{
    public function index()
    {
        if (auth()->user()->roles_id == 3) {
            $pencapaians = Pencapaian::whereIn('indikator_id', auth()->user()->permissions)->get();
        } else {
            $pencapaians = Pencapaian::all();
        }
        return view('admin.pencapaian.index', compact('pencapaians'));
    }

    public function create()
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2) {
            $indikators = Indikator::all();
        } else if(auth()->user()->roles_id == 3) {
            $indikators = Indikator::whereIn('id', auth()->user()->permissions)->get();
        }
        return view('admin.pencapaian.create', compact('indikators'));
    }

    public function store(Request $request)
    {
        // check apakah user menginputkan file
        if ($request->hasFile('file')) {
            // extract excel or csv file to array data
            $data = Excel::toArray([], $request->file('file'));
            // dd($data);
            // loop data
            foreach ($data[0] as $key => $value) {

                // check if data is not empty
                if ($value[0] != null) {

                    // check if data is not header
                    if ($key != 0) {
                        // get indikator id and subindikator id from database with kode subindikator
                        $sub_indikator = SubIndikator::where('kode_sub', $value[0])->first();
                        // dd($sub_indikator);
                        // check if subindikator is exist
                        if ($sub_indikator != null) {
                            // dd($sub_indikator);
                            // check if data is exist
                            $pencapaian = Pencapaian::where('indikator_id', $sub_indikator->indikator_id)->where('subindikator_id', $sub_indikator->id)->where('tahun', $request->tahun)->first();
                            // check if data is not exist
                            if ($pencapaian == null) {

                                // create data
                                $pencapaian = Pencapaian::create([
                                    'indikator_id' => $sub_indikator->indikator_id,
                                    'subindikator_id' => $sub_indikator->id,
                                    'tahun' => $request->tahun,
                                    'tipe' => $value[2],
                                    'persentase' => $value[3],
                                    'sumber_data' => $value[4],
                                ]);
                            }
                        }
                    }
                }
            }
            // redirect to index
            if (auth()->user()->roles_id == 1) {
                return redirect('super/pencapaian')->with('sukses', 'Berhasil Tambah Data!');
            } else if (auth()->user()->roles_id == 2) {
                return redirect('admin/pencapaian')->with('sukses', 'Berhasil Tambah Data!');
            }
        }

        $request->validate(
            [
                'indikator_id' => 'required',
                'subindikator_id' => 'required',
                'tahun' => 'required',
                'tipe' => 'required',
                'persentase' => 'required',
                'sumber_data' => 'required',
            ],
            [
                'indikator_id.required' => 'Indikator tidak boleh kosong!',
                'subindikator_id.required' => 'Subindikator tidak boleh kosong!',
                'tahun.required' => 'Tahun tidak boleh kosong!',
                'tipe.required' => 'Tipe tidak boleh kosong!',
                'persentase.required' => 'Persentase tidak boleh kosong!',
                'sumber_data.required' => 'Sumber data tidak boleh kosong!',
            ]
        );

        $pencapaian = Pencapaian::create([
            'indikator_id' => $request->indikator_id,
            'subindikator_id' => $request->subindikator_id,
            'tahun' => $request->tahun,
            'tipe' => $request->tipe,
            'persentase' => $request->persentase,
            'sumber_data' => $request->sumber_data,
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/pencapaian')->with('sukses', 'Berhasil Tambah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/pencapaian')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show($id)
    {
        $indikators = Indikator::all();
        $subindikators = Subindikator::all();
        $pencapaian = Pencapaian::where('id', $id)->firstOrFail();
        return view('admin.pencapaian.show', compact('pencapaian', 'subindikators', 'indikators'));
    }

    public function edit($id)
    {
        $indikators = Indikator::all();
        $subindikators = Subindikator::all();
        $pencapaian = Pencapaian::where('id', $id)->firstOrFail();
        return view('admin.pencapaian.edit', compact('pencapaian', 'subindikators', 'indikators'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'indikator_id' => 'required',
                'subindikator_id' => 'required',
                'tahun' => 'required',
                'tipe' => 'required',
                'persentase' => 'required',
            ],
            [
                'indikator_id.required' => 'Indikator harus diisi!',
                'subindikator_id.required' => 'Subindikator harus diisi!',
                'tahun.required' => 'Tahun harus diisi!',
                'tipe.required' => 'Tipe harus diisi!',
                'persentase.required' => 'Persentase harus diisi!',
            ]
        );

        $pencapaian = Pencapaian::where('id', $id)->update([
            'indikator_id' => $request->indikator_id,
            'subindikator_id' => $request->subindikator_id,
            'tahun' => $request->tahun,
            'tipe' => $request->tipe,
            'persentase' => $request->persentase,
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/pencapaian')->with('sukses', 'Berhasil Ubah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/pencapaian')->with('sukses', 'Berhasil Ubah Data!');
        }
    }

    public function destroy($id)
    {
        $pencapaian = Pencapaian::where('id', $id)->firstOrFail();
        $pencapaian->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/pencapaian')->with('sukses', 'Berhasil Hapus Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/pencapaian')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
