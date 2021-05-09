<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProduct extends FormRequest
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
        $product_id = $this->segment(3);

        return [
            'code' => "required|unique:products,code,{$product_id},id",
            'title' => 'required|min:3|max:255',
            'description' => 'nullable|min:3|max:255',
            'price' => "required|regex:/^\d+(\.\d{1,2})?$/",
            'image' =>  'nullable|image'
            
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Título obrigatório",
            'code.required' => "Código obrigatório",
            'code.unique' => "Código deve ser único",
            'title.min' => "Título mínimo de 3 dígitos",
            'image.image' => "Foto precisa ser uma imagem",
            'price.required' => "Preço obrigatório",
        ];
    }
}
