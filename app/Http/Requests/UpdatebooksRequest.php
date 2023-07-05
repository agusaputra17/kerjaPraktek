<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatebooksRequest extends FormRequest
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

            'txttingkat' => 'required',
            'noreg' => [
                'required',
                Rule::unique('books','no_perkara')->ignore($this->idregister,'idregister'),
            ],
            'tgl' => 'required',
            'pemohon' => 'required',
            'termohon' => 'required',
            'masalah' => 'required',
            'posisi' => 'required',
            'tuntutan' => 'required',
            'jpn' => 'required',
            'tahap' => 'required',
            'hasildiluar' => 'required',
            'ket' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'txttingkat.required' => ':attribute wajib diisi',
        ];
    }

    public function attributes(): array
    {
        return [
            'txttingkat' => 'Tingkat penanganan',
        ];
    }
}
