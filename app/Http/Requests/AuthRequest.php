<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'name' => ['required'],
            'email' => ['required', 'email'],
            'address' => ['required'],
            'capacity' => ['required'],
            'service_type' => ['required'],
            'password' => 'required|confirmed|min:6',
        ];
    }

    public function messages(): array
    {
        return [
            'fname.required' => "  الإسم مطلوب",
            'email.required' => "  الإيميل  مطلوب",
            'address.required' => "  اسم الإبن مطلوب",
            'capacity.required' => "  السعة التخزينية مطلوبة",
            'service_type.required' => "  نوع الخدمة مطلوب",
        ];
    }
}
