<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLanguagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('languages', function (Blueprint $table) {
			$table->increments('id');

			$table->string('name');

			$table->boolean('active')->default(0);
			$table->string('iso_639_1', 2);
			$table->string('iso_639_3', 3);

			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->timestamps();

			$table->unique('iso_639_3');
			$table->index('iso_639_1');
			$table->index('active');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('languages');
	}

}
