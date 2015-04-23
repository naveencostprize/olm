<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(
            'addresses',
            function(Blueprint $table){
                $table->increments('id');
                $table->integer('user_id');
                $table->string('street_1',255);
                $table->string('street_2',255);
                $table->integer('city_id');
                $table->integer('state_id');
                $table->integer('country_id');
                $table->integer('zipcode');
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
