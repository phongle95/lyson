<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'todo' => 'required',
            'title' => 'required',
            'description' => 'required',
            'keyword' => 'required',
            'img' => 'required',
            'noiDung' => 'required',


        ];
    }
    public function messages()
    {
        return [
            'todo.required' => 'Tên đi đến không hợp lệ',
            'title.required' => 'Title không hợp lệ',
            'description.required' => 'Tóm tắt không hợp lệ',
            'keyword.required' => 'Keyword không hợp lệ',
            'img.required' => 'Hình ảnh không hợp lệ',
            'noiDung.required' => 'Ban chưa nhập nội dung',

        ];
    }
}
