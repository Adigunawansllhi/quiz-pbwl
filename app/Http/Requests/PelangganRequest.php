<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PelangganRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() != null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'gol_id' => 'required',
            'pel_no' => 'required',
            'pel_nama' => 'required',
            'pel_alamat' => 'required',
            'pel_hp' => 'required',
            'pel_ktp' => 'required',
            'pel_seri' => 'required',
            'pel_meteran' => 'required',
            'pel_aktif' => 'required',
            'user_id' => 'required',
        ];
    }
}
