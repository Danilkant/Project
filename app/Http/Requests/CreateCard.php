<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCard extends Request {

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
		$requests = Request::all();
		return [
			'title' => 'required|min:3|max:20|unique:cards,title,'.$requests['id'],
			'description' => 'required|min:10|max:150',
			'cost' => 'required|integer|max:10'
		];
	}

}
