<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('service_id');
            $table->integer('year')->length(4);
            $table->integer('month')->length(2);
            $table->integer('day')->length(2);
            $table->integer('hour')->length(2);
            $table->integer('minute')->length(2);
            $table->float('payment');
            $table->string('IP',20)->nullable();
            $table->string('note',150)->nullable();
            $table->string('status',30)->default('New');

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
        Schema::dropIfExists('reservations');
    }
}
