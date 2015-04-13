<?php namespace App\Http\Controllers;

use App\Card;
use App\Http\Requests;
use App\Http\Requests\CreateCard;
use App\Http\Controllers\Controller;

class MainController extends Controller {

	public function index()
	{
		return view('cards.index', compact('response'));
	}

	public function cards()
	{
		$storage = Card::latest('created_at')->get();

		return view('cards.show_all_cards', compact('storage'));
	}

	public function specific($id)
	{
		$card = Card::findOrFail($id);

		return view('cards.show_specific_card', compact('card'));
	}

	public function createNewCard()
	{
		return view('cards.create_new_card');
	}

	public function store(CreateCard $request)
	{
		Card::create($request->all());

		return redirect('cards');
	}

	public function deleteCurrentCard($id)
	{
		Card::where('id', '=', $id)->delete();

		return redirect('cards');
	}

	public function updateCurrentCard($id)
	{
		$card = Card::findOrFail($id);

		return view('cards.update_current_card', compact('card'));
	}

	public function update(CreateCard $request, $id)
	{
		$card = Card::findOrFail($id);

		$card->update($request->all());

		return redirect('cards');
	}

}
