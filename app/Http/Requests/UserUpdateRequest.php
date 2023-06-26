<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|max:255',
            'email' => 'required|email|',
            'roles_id' => 'required',
            'foto_user' => 'mimes:jpg,bmp,png,svg,jpeg|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama User tidak boleh kosong',
            'nama.max' => 'Nama User tidak boleh lebih dari 255 karakter',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'roles_id.required' => 'Role tidak boleh kosong',
            'foto_user.mimes' => 'Foto harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
            'foto_user.max' => 'Foto tidak boleh lebih dari 2MB'
        ];
    }
}
