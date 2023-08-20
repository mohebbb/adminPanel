<?php

// namespace App\Http\Requests;

// use Illuminate\Foundation\Http\FormRequest;

// class UserStoreCrudRequest extends FormRequest
// {
//     /**
//      * Determine if the user is authorized to make this request.
//      */
//     public function authorize(): bool
//     {
//         // only allow updates if the user is logged in
//         return backpack_auth()->check();
//     }

//     /**
//      * Get the validation rules that apply to the request.
//      *
//      * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
//      */
//     public function rules(): array
//     {
//         return [
//             'email'    => 'required|unique:'.config('permission.table_names.users', 'users').',email',
//             'name'     => 'required',
//             // 'password' => 'required|confirmed',
//         ];
//     }
// }

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserStoreCrudRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'    => 'required|unique:'.config('permission.table_names.users', 'users').',email',
            'name'     => 'required',
            'password' => ['required', 'confirmed', Password::min(8)
            ->letters()
            ->numbers()
            ],
        ];
    }
}