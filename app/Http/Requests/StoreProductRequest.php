<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image_cover' => 'string|max:255',
            'image_1' => 'string|max:255',
            'image_2' => 'string|max:255',
            'image_3' => 'string|max:255',
            'image_4' => 'string|max:255',
            'image_5' => 'string|max:255',
        ];
    }
}
