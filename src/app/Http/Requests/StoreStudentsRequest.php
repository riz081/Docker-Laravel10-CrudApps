<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentsRequest extends FormRequest
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
            //
            'txtid' => 'required|unique:students,idstudents|min:7|max:7',
            'txtfullname' => 'required',
            'txtgender' => 'required',
            'txtaddress' => 'required',
            'txtphone' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'txtid.required' => 'Please fill :attribute!',
            'txtid.unique'   => ':attribute already available!',
            'txtfullname.required' => 'Please fill :attribute!',
            'txtaddress.required' => 'Please fill your :attribute!',
            'txtphone.required' => 'Please fill your :attribute!',
            'txtgender.required' => 'Please fill choose :attribute!',
        ];
    }

    public function attributes(): array
    {
        return [
            'txtid' => 'ID Students',
            'txtfullname' => 'Fullname',
            'txtaddress' => 'Address',
            'txtphone' => 'Phone Number',
            'txtgender' => 'Gender'
        ];
    }
}
