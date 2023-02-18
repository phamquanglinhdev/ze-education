<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check() && backpack_user()->role == "admin";
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:100',
            'description' => 'required',
            'learn_method' => 'required',
            'main_content' => 'required'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [

        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên khóa học',
            'description.required' => 'Vui lòng nhập giới thiệu ngắn',
            'learn_method.required' => 'Vui lòng nhập phương thức học',
            'main_content.required' => 'Vui lòng nhập nội dung chính',
            'name.min' => 'Tên khóa học quá ngắn ( Tối thiểu 5 ký tự)',
            'name.max' => 'Tên khóa học quá dài ( Tối thiểu 100 ký tự)',
        ];
    }
}
