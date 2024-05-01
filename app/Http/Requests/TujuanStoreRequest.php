<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TujuanStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2 || auth()->user()->roles_id == 3;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'pilar_id' => 'required',
            'nama_tujuan' => 'required|max:255',
            'deskripsi_tujuan' => 'required',
            'ikon_tujuan' => 'mimes:jpg,bmp,png,svg,jpeg|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'pilar_id.required' => 'Pilar tidak boleh kosong',
            'nama_tujuan.required' => 'Nama tujuan tidak boleh kosong',
            'nama_tujuan.max' => 'Nama tujuan tidak boleh lebih dari 255 karakter',
            'deskripsi_tujuan.required' => 'Deskripsi tujuan tidak boleh kosong',
            'ikon_tujuan.mimes' => 'Ikon tujuan harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
            'ikon_tujuan.max' => 'Ikon tujuan tidak boleh lebih dari 2MB'
        ];
    }
}
