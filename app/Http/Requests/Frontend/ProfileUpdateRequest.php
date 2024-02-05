<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:10240'],
            'banner' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:10240'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'address' => ['required', 'string', 'max:255'],
            'about' => ['required', 'string', 'max:255'],
            'website' => ['nullable', 'url', 'max:255'],
            'fb_link' => ['nullable', 'url', 'max:255'],
            'x_link' => ['nullable', 'url', 'max:255'],
            'in_link' => ['nullable', 'url', 'max:255'],
            'wa_link' => ['nullable', 'url', 'max:255'],
            'insta_link' => ['nullable', 'url', 'max:255'],
        ];
    }
}
