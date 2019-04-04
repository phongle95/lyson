<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'tenHotel' => 'required',
            'title' => 'required',
            'description' => 'required',
            'keyword' => 'required',
            'gia' => 'required',
            'img' => 'required',
            'diaChi' => 'required',
            'noiDung' => 'required',


        ];
    }
    public function messages()
    {
        return [
            'tenHotel.required' => 'Tên hotel không hợp lệ',
            'title.required' => 'Title không hợp lệ',
            'description.required' => 'Tóm tắt không hợp lệ',
            'keyword.required' => 'Keyword không hợp lệ',
            'gia.required' => 'Giá chưa hợp lệ',
            'img.required' => 'Hình ảnh không hợp lệ',
            'diaChi.required' => 'Địa chỉ không hợp lệ',
            'noiDung.required' => 'Ban chưa nhập nội dung',

        ];
    }
}
