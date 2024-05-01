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
            'tujuan_id' => 'required',
            'nama_indikator' => 'required|max:255',
            'kode_indikator' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'tujuan_id.required' => 'Tujuan tidak boleh kosong',
            'nama_indikator.required' => 'Nama indikator tidak boleh kosong',
            'nama_indikator.max' => 'Nama indikator tidak boleh lebih dari 255 karakter',
            'kode_indikator.required' => 'Kode indikator tidak boleh kosong',
            'kode_indikator.max' => 'Kode indikator tidak boleh lebih dari 255 karakter'
        ];
    }
}
