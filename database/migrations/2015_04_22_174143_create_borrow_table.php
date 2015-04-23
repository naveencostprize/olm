<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(
            'borrow',
            function(Blueprint $table){
                $table->increments('id');
                $table->integer('user_id');
                $table->integer('book_id');
                $table->integer('book_serial_id');
                $table->integer('no_of_days');
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
