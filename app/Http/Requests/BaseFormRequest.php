<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Exceptions\JsonAutorizationException;
use App\Exceptions\JsonValidationException;

class BaseFormRequest extends FormRequest
{
    

    protected function failedAuthorization(){
        throw new JsonAutorizationException;
    }

    protected function failedValidation(Validator $validator){
        throw new JsonValidationException($validator);
    }
}
