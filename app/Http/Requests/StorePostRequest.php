<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{

    public function attributes()
{
    return [
        'title' => 'title yozish majburiy',
        'short_content' => 'short_content yozish majburiy',
        'content' => 'content yozish majburiy',
    ];
}

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:150',
            'short_content' => 'required',
            'content' => 'required',
        ];
    }
}
