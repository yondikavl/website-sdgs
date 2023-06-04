<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubIndikatorStoreRequest extends FormRequest
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
            'indikator_id' => 'required',
            'nama_sub' => 'required|max:255',
            'kode_sub' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'indikator_id.required' => 'Indikator tidak boleh kosong',
            'nama_sub.required' => 'Nama subindikator tidak boleh kosong',
            'nama_sub.max' => 'Nama subindikator tidak boleh lebih dari 255 karakter',
            'kode_sub.required' => 'Kode subindikator tidak boleh kosong',
            'kode_sub.max' => 'Kode subindikator tidak boleh lebih dari 255 karakter'
        ];
    }
}
