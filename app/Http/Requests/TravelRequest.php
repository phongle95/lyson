<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TravelRequest extends FormRequest
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
            'tenTour' => 'required',
            'title' => 'required',
            'tomTat' => 'required',
            'keyword' => 'required',
            'gia' => 'required',
            'img' => 'required',
            'date' => 'required',
            'noiDung' => 'required',
            'khuyenMai' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'tenTour.required' => 'Tên Tour không hợp lệ',
            'title.required' => 'Title không hợp lệ',
            'tomTat.required' => 'Tóm tắt không hợp lệ',
            'keyword.required' => 'Keyword không hợp lệ',
            'gia.required' => 'Giá chưa hợp lệ',
            'img.required' => 'Hình ảnh không hợp lệ',
            'date.required' => 'Chọn ngày không hợp lệ',
            'noiDung.required' => 'Ban chưa nhập nội dung',
            'khuyenMai.required' => 'Ban chưa chọn Khuyến mãi',
        ];
    }
}
