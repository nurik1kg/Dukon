<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateSofaRequest extends Request {

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
            'code' => 'required|unique:sofa,code,'.$this->sofa, 
            'material' => 'required', 
            'frame_material' => 'required', 
            'width' => 'required', 
            'heigth' => 'required', 
            'depth' => 'required', 
            'length_b' => 'required', 
            'width_b' => 'required', 
            'price' => 'numeric|required', 
            
		];
	}
}
