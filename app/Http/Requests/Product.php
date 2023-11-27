<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Product extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_brand' => 'required|exists:branch,id',
            'id_category'=> 'required|exists:category,id',
            'name'=> 'required|min:5',
            'description'=> 'required|min:5',
            'sellprice' => 'required|integer|min:10000',
            'pty_store'=> 'required|min:5',
            'discount'=> 'required|integer|min:5|max:50',
            'isdiscount' => 'required|in:0,1',
            'status'=> 'required|min:5',
        ];
    }
    

    public function message(): array
    {
        return [

            'id_brand.required' => 'Thương hiệu là trường bắt buộc.',
            'id_brand.exists' => 'Thương hiệu không tồn tại trong cơ sở dữ liệu.',

            'id_category.required' => 'Danh mục là trường bắt buộc.',
            'id_category.exists' => 'Danh mục không tồn tại trong cơ sở dữ liệu.',

            'name.required' => 'Tên sản phẩm là trường bắt buộc.',
            'name.min' => 'Tên sản phẩm phải có ít nhất 5 ký tự.',

            'description.required' => 'Mô tả là trường bắt buộc.',
            'description.min' => 'Mô tả phải có ít nhất 5 ký tự.',

            'sellprice.required' => 'Giá bán là trường bắt buộc.',
            'sellprice.integer' => 'Giá bán phải là số nguyên.',
            'sellprice.min' => 'Giá bán phải lớn hơn hoặc bằng 10,000.',

            'pty_store.required' => 'Phần trăm tồn kho là trường bắt buộc.',
            'pty_store.min' => 'Phần trăm tồn kho phải có ít nhất 5 ký tự.',

            'discount.required' => 'Phần trăm giảm giá là trường bắt buộc.',
            'discount.integer' => 'Phần trăm giảm giá phải là số nguyên.',
            'discount.min' => 'Phần trăm giảm giá phải lớn hơn hoặc bằng 5.',
            'discount.max' => 'Phần trăm giảm giá không được lớn hơn 50.',

            'isdiscount.required' => 'Trường isdiscount là bắt buộc.',
            'isdiscount.in' => 'Trường isdiscount chỉ có thể là 0 hoặc 1.',

            'status.required' => 'Trạng thái là trường bắt buộc.',
            'status.min' => 'Trạng thái phải có ít nhất 5 ký tự.',
        ];
    }
}
