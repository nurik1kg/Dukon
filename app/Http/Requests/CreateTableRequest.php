<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateTableRequest extends Request {

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
            'code' => 'required|unique:table,code,'.$this->table, 
            'width' => 'required', 
            'height' => 'required', 
            'depth' => 'required', 
            'price' => 'numeric|required', 
            
		];
	}
}
