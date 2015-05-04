<?php namespace App\Services;

use App\User;
use App\Type;
use App\Faction;
use App\Card;
use App\Reference;
use App\Space;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{

		return User::create([
				'name' => $data['name'],
				'email' => $data['email'],
				'password' => bcrypt($data['password']),
		]);
	}

	public function createInventory($id)
	{
		$temp = 0;

		foreach ($id as $item) {
			$temp = $item->id;
		}

		if($temp < 2){
			Type::create(['name'=>'temp']);

			Faction::create(['name'=>'temp']);
			
			Card::create(['type_id'=>1,'faction_id'=>1,'cost'=>0,'title'=>'Temp','description'=>'Replace me!']);
		}

		Reference::create(['user_id' => $temp]);

		for ($i=0; $i < 32; $i++) { 
			Space::create(['inv_id' => $temp, 'card_id' => 1]);
		}

		return true;
	}

}
