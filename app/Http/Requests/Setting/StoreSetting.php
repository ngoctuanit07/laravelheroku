<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\CoreRequest;

class StoreSetting extends CoreRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required",
            "keyword" => "required",
            "meta_title" => "required",
            "meta_keyword" => "required",
            "meta_description" => "required",
        ];
    }
}