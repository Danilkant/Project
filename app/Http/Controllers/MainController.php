<?php namespace App\Http\Controllers;

use App\Card;
use App\Type;
use App\Faction;
use App\User;
use App\Space;
use App\Reference;

use App\Http\Requests;
use App\Http\Requests\CreateCard;
use App\Http\Requests\UpdateUser;
use App\Http\Requests\UpdateInventory;
use App\Http\Controllers\Controller;

class MainController extends Controller {


	public function __construct(){
		$this->middleware('auth');
	}

	public function index()
	{
		return view('index', compact('response'));
	}

	//cards

	public function cards()
	{
		$storage = Card::latest('created_at')->get();

		return view('cards.show_all_cards', compact('storage'));
	}

	public function specificCard($id)
	{
		$card = Card::select('cards.id', 'cards.title', 'cards.cost', 'cards.description', 'types.name as type', 'factions.name as faction')
				->join('types', 'cards.type_id', '=', 'types.id')
				->join('factions', 'cards.faction_id', '=', 'factions.id')
				->findOrFail($id);


		return view('cards.show_specific_card', compact('card'));
	}

	public function createNewCard()
	{
		$data = Type::get();
		$tp = [];
		$fc = [];

		foreach ($data as $item) {
			$tp[$item->id] = $item->name;
		}

		$data = Faction::get();

		foreach ($data as $item) {
		$fc[$item->id] = $item->name;
		}

		return view('cards.create_new_card', compact('tp', 'fc'));
	}

	public function storeCard(CreateCard $request)
	{
		Card::create($request->all());

		return redirect('cards');
	}

	public function updateCurrentCard($id)
	{
		$card = Card::findOrFail($id);

		$data = Type::get();
		$tp = [];
		$fc = [];

		foreach ($data as $item) {
			$tp[$item->id] = $item->name;
		}

		$data = Faction::get();

		foreach ($data as $item) {
		$fc[$item->id] = $item->name;
		}


		return view('cards.update_current_card', compact('card', 'tp', 'fc'));
	}

	public function updateCard(CreateCard $request, $id)
	{
		if($id > 1){
			$card = Card::findOrFail($id);

			$card->update($request->all());
		}


		return redirect('cards/'.$id);
	}

	public function deleteCurrentCard($id)
	{
		if($id > 1){
			Card::where('id', '=', $id)->delete();
			Space::where('card_id', '=', null)->update(['card_id'=>1]);
		}

		return redirect('cards');

	}

	//users

	public function users()
	{
		$storage = User::latest('created_at')->get();

		return view('users.show_all_users', compact('storage'));
	}

	public function specificUser($id)
	{
		$user = User::findOrFail($id);

		$inventory = User::select('spaces.id', 'spaces.card_id', 'cards.title', 'cards.description', 'spaces.updated_at')
		->join('references', 'users.id', '=', 'references.user_id')
		->join('spaces', 'references.id', '=', 'spaces.inv_id')
		->join('cards', 'spaces.card_id', '=', 'cards.id')
		->where('users.id', '=', $id)->get();

		$data = Card::select('id', 'title')->get();
		$list = [];

		foreach ($data as $item) {
			$list[$item->id] = $item->title;
		}

		return view('users.show_specific_user', compact('user', 'inventory', 'list'));
	}

	public function deleteCurrentUser($id)
	{
		if($id > 1){
			User::where('id', '=', $id)->delete();
		}

		return redirect('users');
	}

	public function updateCurrentUser($id)
	{
		$user = User::findOrFail($id);

		return view('users.update_current_user', compact('user'));
	}

	public function updateUser(UpdateUser $request, $id)
	{
		$user = User::findOrFail($id);

		$user->update($request->all());

		return redirect('users');
	}

	//inventory

	public function updateInventory(UpdateInventory $request, $id)
	{
		unset($request['_token']);

		foreach ($request->all() as $key => $value) {
			Space::where('id', '=', $key)->update(['card_id' => $value]);
		}

		return redirect('users/'.$id);
	}

}
