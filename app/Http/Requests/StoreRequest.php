<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // $rules = [
        //     'name' => [],
        //     'email' => [],
        //     'phone' => []
        // ];

        if (in_array($this->method(), ['POST'])) {
            $rules['name'] = ['required'];
            $rules['email'] = ['required', 'unique:users'];
            $rules['phone'] = ['required', 'min:11', 'max:11'];
        }

        if (in_array($this->method(), ['PATCH'])) {
            $rules['name'] = [];
            $rules['email'] = [];
            $rules['phone'] = [];
        }

        return $rules;
    }
}
