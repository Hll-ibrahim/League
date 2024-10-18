<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required|min:5|max:30',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'İsim alanı gereklidir.',
            'email.required' => 'Email alanı gereklidir.',
            'password.required' => 'Şifre alanı gereklidir.',

            'email.unique' => 'Girilen Email ile daha önce kayıt oluşturulmuş. Giriş yapmayı deneyebilirsiniz.',
            'name.unique' => 'Girilen isim ile daha önce kayıt oluşturulmuş.',

            'name.min' => 'İsim alanı en az 5 karakterden oluşmalıdır.',
            'password.min' => 'Şifre alanı en az 5 karakterden oluşmalıdır.',

            'name.max' => 'Başlık alanı en fazla 30 karakterden oluşmalıdır.',
            'password.max' => 'Şifre alanı en fazla 30 karakterden oluşmalıdır.',

            'email.email' => 'Email alanı geçerli değil.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Doğrulama hatası',
            'errors' => $errors
        ], 422));
    }
}
