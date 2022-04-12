<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestJobApplication extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name'              => ['required', 'max:50'],
        ];
    }
}
