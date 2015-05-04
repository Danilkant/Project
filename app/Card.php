<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model {

	protected $table = 'cards';

	protected $fillable = [
		'type_id',
		'faction_id',
		'cost',
		'title',
		'description'
	];

}
