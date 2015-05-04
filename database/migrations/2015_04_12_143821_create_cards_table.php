<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('type_id')->unsigned();
			$table->integer('faction_id')->unsigned();
			$table->integer('cost')->unsigned();
			$table->string('title');
			$table->text('description');
			$table->timestamps();
			$table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
			$table->foreign('faction_id')->references('id')->on('factions')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cards');
	}

}
