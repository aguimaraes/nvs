<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencyRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 3);
            $table->float('value');
            $table->string('from', 3);

            $table->foreign('code')
                ->references('code')
                ->on('currencies');
            $table->foreign('from')
                ->references('code')
                ->on('currencies');
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
        Schema::drop('currency_rates');
    }
}
