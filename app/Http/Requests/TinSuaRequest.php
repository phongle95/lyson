<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TinSuaRequest extends FormRequest
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
            'tieuDe' => 'required',
            'title' => 'required',
            'description' => 'required',
            'keyword' => 'required',
            'date' => 'required',
            'noiDung' => 'required',
            'maLoaiTin' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'tieuDe.required' => 'Tiêu đề không hợp lệ',
            'title.required' => 'Title không hợp lệ',
            'description.required' => 'Description không hợp lệ',
            'keyword.required' => 'Keyword không hợp lệ',
            'date.required' => 'Ngày không hợp lệ',
            'noiDung.required' => 'Ban chua nhap nội dung',
            'maLoaiTin.required' => 'Ban chua chọn mã loại tin',
        ];
    }
}
