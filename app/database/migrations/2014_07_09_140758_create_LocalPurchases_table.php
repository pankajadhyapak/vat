<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalPurchasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('local_purchases', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id');
            $table->string('seller_name');
            $table->string('seller_tin');
            $table->string('invoice_number');
            $table->string('invoice_date');
            $table->string('net_value');
            $table->string('tax_charged');
            $table->integer('month');
            $table->integer('year');
            $table->string('other_charges')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('local_purchases');
	}

}
