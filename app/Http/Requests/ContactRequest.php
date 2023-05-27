<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class ContactRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $contactId = $this->route('contact'); // Obtém o ID atual do contato

        return [
            'name' => 'required|min:6',
            'phone' => [
                'required',
                'digits:9',
                Rule::unique('contacts', 'phone')->ignore($contactId),
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('contacts', 'email')->ignore($contactId),
            ],
        ];
    }
}
