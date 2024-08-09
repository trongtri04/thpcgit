<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            'city' => 'required',
            'ward' => 'required',
            'district' => 'required',

        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Tên là thông tin bắt buộc',
            'phone.required' => 'Số điện thoại là thông tin bắt buộc',
            'email.required' => 'Email là thông tin bắt buộc',
            'address.required' => 'Địa chỉ là thông tin bắt buộc',
            'city.required' => 'Tỉnh/Tp là thông tin bắt buộc',
            'ward.required' => 'Quận/Huyện là thông tin bắt buộc',
            'district.required' => 'Phường/Xã là thông tin bắt buộc',
        ];
    }
}
