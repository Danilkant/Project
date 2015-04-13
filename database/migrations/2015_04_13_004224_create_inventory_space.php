<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventorySpace extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventorySpace', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('inv_id')->unsigned();
			$talbe->integer('cardRef_id')->default('1');
			$table->foreign('cardRef_id')->references('id')->on('cards');
			$table->foreign('inv_id')->references('id')->on('inventoryReference');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inventorySpace');
	}

}
