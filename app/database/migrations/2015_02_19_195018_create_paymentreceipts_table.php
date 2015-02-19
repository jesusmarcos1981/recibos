<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentreceiptsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paymentreceipts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('date');
			$table->string('received_from');
			$table->decimal('amount',5,2);
			$table->enum('currency', ['MXP', 'USD', 'EUR']);
			$table->enum('paymentmethod', ['CASH', 'CHECK', 'TPV', 'TRASFER']);
			$table->integer('bank_id')->unsigned();
			$table->enum('payment', ['Total Payment', 'Partial Payment']);
			$table->integer('presentedby_id')->unsigned();
			$table->integer('cashier_id')->unsigned();
			$table->date('invoice_date');
			$table->string('invoice_number', 11);
			$table->decimal('exchange_rate_invoice',5,2);
			$table->decimal('exchange_of_payment',5,2);
			$table->string('slug');
			$table->foreign('bank_id')->references('id')->on('banks');
			$table->foreign('presentedby_id')->references('id')->on('users');
			$table->foreign('cashier_id')->references('id')->on('users');
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
		Schema::drop('paymentreceipts');
	}

}
