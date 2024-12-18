<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeMessageRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'required',
            'email' => 'nullable',
            'phone' => 'required',
            'address' => 'required',
            'service' => 'required',
            'message' => 'required',
        ];

        if ($this->has('special_field')) {
            $rules['special_field'] = 'required';
        }

        return $rules;
    }
    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'email.email' => 'The email address is not valid.',
            'phone.required' => 'The phone number is required.',
            'address.required' => 'The address is required.',
            'service.required' => 'The service field is required.',
            'message.required' => 'The message field is required.',
            'special_field.required' => 'The special field is required when present.',
        ];
    }

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new \Illuminate\Validation\ValidationException($validator);
    }
}
