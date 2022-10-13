<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user = request()->route('user');

        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'username' => 'required|unique:users,username,'.$user->id,
        ];
    }
}
