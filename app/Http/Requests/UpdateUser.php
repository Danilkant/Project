<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateUser extends Request {

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
			'email' => 'required|email|unique:users,email,'.$requests['id'],
			'name' => 'required|min:3'
		];
	}

}
