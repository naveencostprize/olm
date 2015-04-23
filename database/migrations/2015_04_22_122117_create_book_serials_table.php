<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookSerialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(
            'book_serials',
            function(Blueprint $table){
                $table->increments('id');
                $table->integer('book_id');
                $table->string('serial_no',255);
                $table->tinyInteger('availability');
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
