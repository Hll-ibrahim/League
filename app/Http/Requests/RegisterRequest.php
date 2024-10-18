<?php

namespace App\Http\Requests;


class RegisterRequest extends UserRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return parent::authorize();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return array_merge(parent::rules(), [
            'password' => 'confirmed',
            'password_confirmation' => 'required|same:password',
            'name'=>'required|min:5|string|max:30|unique:users,name',
            'email' => 'unique:users,email',
        ]);
    }

    public function messages(): array{
        return array_merge(parent::messages(), [
            'password_confirmation.required' => 'The password confirmation is required.',
            'password_confirmation.same' => 'The passwords do not match.',
            'name.required'=>'Name is required.',
            'name.min'=>'Name must be at least 5 characters.',
            'name.max'=>'Name must be less than 30 characters.',
            'name.unique'=>'Name must be unique.',
            'password.confirmed' => 'Şifreler eşleşmiyor!',

        ]);
    }
}
