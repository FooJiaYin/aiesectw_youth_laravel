<?php

namespace App\YouthSpeak\Press\Requests;

use App\Http\Requests\Request;

class PressRequest extends Request
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
            'category_id' => 'exists:categories,id|integer|max:10',
//            'photo_id' => 'exists:photos,id|integer|max:10',
            'status' => 'in:1,2,3,4',
            'title' => 'required|string|max:255',
            'excerpt' => 'string',
            'content' => 'required|string',
        ];
    }
}
