<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'subject' => 'required|min:6',
            'body' => 'required|min:10',
            'article_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'subject.required' => 'This field is required to be filled!',
            'subject.min' => 'This field length is required to be greater than 6!',
            'body.required' => 'This field is required to be filled!',
            'body.min' => 'This field length is required to be greater than 10!',
        ];
    }
}
