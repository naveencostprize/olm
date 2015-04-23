<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(
            'cities',
            function(Blueprint $table){
                $table->increments('id');
                $table->string('city_name',255);
                $table->integer('country_id');
                $table->integer('state_id');
                $table->tinyInteger('status')->default(1);
                $table->timestamps();
                $table->softDeletes();
            }
        );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
