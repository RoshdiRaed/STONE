<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    // public function rules(): array
    // {
    //     return [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => [
    //             'required',
    //             'string',
    //             'lowercase',
    //             'email',
    //             'max:255',
    //             Rule::unique(User::class)->ignore($this->user()->id),
    //         ],
    //     ];
    // }
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:15'],
            'dob' => ['required', 'date'],
            'gender' => ['required', 'in:male,female,other'],
            'address' => ['nullable', 'string'],
            'skills' => ['nullable', 'string'],
            'resume' => ['nullable', 'file', 'mimes:pdf,doc,docx'],
            'profile_picture' => ['nullable', 'file', 'image'],
            'website' => ['nullable', 'url'],
        ];

}
}
