<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
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
        $productId = $this->route('product') ? $this->route('product')->id : null;

        return [
            'article_number' => 'required|integer|unique:product,article_number,' . $productId,
            'type_id' => 'required|exists:ring_type,id',
            'material_id' => 'required|exists:material,id',
            'model_id' => 'required|exists:models,id',
            'size' => 'required|integer',
            'price' => 'required|integer',
            'stock' => 'nullable|integer'
        ];
    }
}
