<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create(
            'users',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('usn');
                $table->string('user_name',200)->index();
                $table->string('password', 60);
                $table->string('email')->unique();
                $table->string('phone', 255);
                $table->integer('verified_user')->default(0);
                $table->tinyInteger('status')->default(1);
                $table->rememberToken();
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
