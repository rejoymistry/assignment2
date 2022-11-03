<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrademarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trademarks', function (Blueprint $table) {
            $table->string('TrademarkName');
            $table->string('OwnerName');
            $table->string('OwnerEmail');
            $table->string('RegistrationDate');
            $table->string('ExpirationDate');
            $table->string('Category');
            $table->string('OwnerInformation');
            $table->string('OtherInformation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public
    function down()
    {
        Schema::dropIfExists('trademarks');
    }
}
