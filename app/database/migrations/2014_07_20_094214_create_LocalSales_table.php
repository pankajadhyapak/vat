<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalSalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('LocalSales', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id');
            $table->string('purchase_tin');
            $table->string('purchaser_name');
            $table->string('invoice_no');
            $table->string('invoice_date');
            $table->string('net_value_of_goods');
            $table->string('tax_value');
            $table->string('other_charges');
            $table->string('month');
            $table->string('year');
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
		Schema::drop('LocalSales');
	}

}
