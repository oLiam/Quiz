<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('quizzes', function($table)
        {
		$table->increments('id');
        $table->string('quizname');
        $table->date('created_at');
        $table->dateTime('updated_at');
        });

        Schema::table('quizzes', function($table)
        {

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('quizzes');
	}

}
