<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieStoreRequest extends FormRequest
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
        return [
            "title" => "required|min:2",
            "year" => "required|integer|min:4",
            "description" => "required",
            "img" => "image"
        ];
    }
    public function messages(){
        return [
            "title.required" => "Campo obligatorio",
            "title.min" => "Il titlo deve contenere almeno 2 caratteri.",
            "year.required" => "Campo obligatorio"
        ];
    }
}
