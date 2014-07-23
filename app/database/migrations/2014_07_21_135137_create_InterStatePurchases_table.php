<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInterStatePurchasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('InterStatePurchases', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id');
            $table->string('month');
            $table->string('year');
            $table->string('seller_tin');
            $table->string('name_of_seller');
            $table->string('address_of_seller');
            $table->string('invoice_number');
            $table->string('invoice_date');
            $table->string('quantity');
            $table->string('net_value');
            $table->string('tax_value');
            $table->string('other_charges');
            $table->string('total_value');
            $table->string('form_type');
            $table->string('main_commodity');
            $table->string('purpose_type');
            $table->string('sub_commodity_description');

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
		Schema::drop('InterStatePurchases');
	}

}
