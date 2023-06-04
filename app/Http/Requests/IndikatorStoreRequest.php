<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndikatorStoreRequest extends FormRequest
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
            'nama_indikator' => 'required|max:255',
            'deskripsi_indikator' => 'required',
            'ikon_indikator' => 'mimes:jpg,bmp,png,svg,jpeg|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'pilar_id.required' => 'Pilar tidak boleh kosong',
            'nama_indikator.required' => 'Nama Indikator tidak boleh kosong',
            'nama_indikator.max' => 'Nama Indikator tidak boleh lebih dari 255 karakter',
            'deskripsi_indikator.required' => 'Deskripsi Indikator tidak boleh kosong',
            'ikon_indikator.mimes' => 'Ikon Indikator harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
            'ikon_indikator.max' => 'Ikon Indikator tidak boleh lebih dari 2MB'
        ];
    }
}
