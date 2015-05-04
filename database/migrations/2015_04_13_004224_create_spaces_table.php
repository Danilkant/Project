<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpacesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spaces', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('inv_id')->unsigned();
			$table->integer('card_id')->unsigned()->default(1);
			$table->foreign('card_id')->references('id')->on('cards');
			$table->foreign('inv_id')->references('id')->on('references')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('spaces');
	}

}
