<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationForeignkeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tokens', function($table)
        {
            $table->foreign('user_id')->references('_id')->on('users');
        });

        Schema::table('reset_keys', function($table)
        {
            $table->foreign('user_id')->references('_id')->on('users');
        });
        Schema::table('categories', function($table)
        {
            $table->foreign('user_id')->references('_id')->on('users');
        });
        Schema::table('goals', function($table)
        {
            $table->foreign('category_id')->references('_id')->on('categories');
        });
        Schema::table('milestones', function($table)
        {
            $table->foreign('goal_id')->references('_id')->on('goals');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reset_keys', function($table)
        {
            $table->dropForeign('reset_keys_user_id_foreign');
        });

        Schema::table('tokens', function($table)
        {
            $table->dropForeign('tokens_user_id_foreign');
        });
	}

}
