<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PilarStoreRequest extends FormRequest
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
            'nama_pilar' => 'required|max:255',
            'deskripsi_pilar' => 'required',
            'ikon_pilar' => 'mimes:jpg,bmp,png,svg,jpeg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'nama_pilar.required' => 'Nama pilar tidak boleh kosong',
            'nama_pilar.max' => 'Nama pilar tidak boleh lebih dari 255 karakter',
            'deskripsi_pilar.required' => 'Deskripsi pilar tidak boleh kosong',
            'ikon_pilar.mimes' => 'Ikon pilar harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
            'ikon_pilar.max' => 'Ikon pilar tidak boleh lebih dari 2MB'
        ];
    }
}
