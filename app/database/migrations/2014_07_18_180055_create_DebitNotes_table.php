<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDebitNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DebitNotes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id');
            $table->string('debit_note_no');
            $table->string('debit_note_date');
            $table->string('seller_tin');
            $table->string('name_of_seller');
            $table->string('net_value');
            $table->string('tax_value');
            $table->string('other_charges');
            $table->string('total_charges');
            $table->string('original_invoice_number');
            $table->string('original_invoice_date');
            $table->integer('month');
            $table->integer('year');
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
		Schema::drop('DebitNotes');
	}

}
