<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentFormRequest extends FormRequest
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
            'name'=>'required|string|min:3',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'İsim Soyisim Zorunludur',
            'name.string' => 'İsim Soyisim Karakterlerden Oluşmalıdır',
            'name.min' => 'İsim Soyisim Minimum 3 Karakterden Oluşmalıdır',
            'email.required' => 'E-posta Adresi Zorunludur',
            'email.email' => 'Geçersiz bir email adresi girdiniz.',
            'subject.required' => 'Konu Kısmı Boş Geçilemez',
            'message.required' => 'Mesaj Kısmı Boş Geçilemez',
        ];
    }
}
