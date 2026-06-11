<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ["required", "string", "min:3"],
            "email" => ["required", "email", "min:3"],
            "company" => ["required", "string", "min:3"],
            "phone" => ["required", "string", "min:3"],
            "service" => ["required", "string", "in:Social Media Marketing,SEO & PPC,Brand Identity,Media Production,Web Development,Dedicated Remote Staff"],
            "website" => ["required", "string", "max:244"],
            "budget" => ["required", "string", "max:244"],
            "message" => ["required", "string", "max:244"],
        ];
    }
}
