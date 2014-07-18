<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreditNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creditNotes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id');
            $table->string('credit_note_no');
            $table->string('credit_note_date');
            $table->string('buyer_tin');
            $table->string('name_of_the_buyer');
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
		Schema::drop('creditNotes');
	}

}
