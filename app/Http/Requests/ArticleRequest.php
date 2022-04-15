<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'string|max:255',
            'created_at' => 'date_format:Y-m-d H:i:s',
            'publish_at' => 'date_format:Y-m-d H:i:s',
            'updated_at' => 'date_format:Y-m-d H:i:s',
            'image' => 'required|image'
        ];
    }
}
