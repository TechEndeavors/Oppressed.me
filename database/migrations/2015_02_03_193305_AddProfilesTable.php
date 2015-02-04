<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('slug');
			$table->string('name');
			$table->string('address1')->nullable();
			$table->string('address2')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->string('zip')->nullable();
			$table->string('country')->nullable();
			$table->text('summary')->nullable();
			$table->text('details')->nullable();
			$table->timestamp('charged_at')->nullable();
			$table->timestamp('sentenced_at')->nullable();
			$table->timestamp('expected_release_at')->nullable();
			$table->timestamp('released_at')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}
