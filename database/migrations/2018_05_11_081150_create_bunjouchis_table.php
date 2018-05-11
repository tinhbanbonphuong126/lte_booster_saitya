<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBunjouchisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bunjouchis', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 64)->nullable();
			$table->string('map_url', 191)->nullable();
			$table->string('document_url', 191)->nullable();
			$table->string('address', 128)->nullable();
			$table->string('land_area', 64)->nullable();
			$table->string('ground', 32)->nullable();
			$table->string('total_parcel', 32)->nullable();
			$table->string('construction_pay_rate', 32)->nullable();
			$table->string('floor_area_ratio', 32)->nullable();
			$table->string('usage_area', 32)->nullable();
			$table->string('drainage', 32)->nullable();
			$table->string('dealing_status', 32)->nullable();
			$table->integer('school_id')->unsigned()->nullable();
			$table->integer('station_id')->unsigned()->nullable();
			$table->decimal('status', 1, 0)->nullable();
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
		Schema::drop('bunjouchis');
	}

}
