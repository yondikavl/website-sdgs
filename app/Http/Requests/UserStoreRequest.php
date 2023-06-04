<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2;
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
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
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
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password tidak boleh kurang dari 8 karakter',
            'roles_id.required' => 'Role tidak boleh kosong',
            'foto_user.mimes' => 'Foto harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
            'foto_user.max' => 'Foto tidak boleh lebih dari 2MB'
        ];
    }
}
