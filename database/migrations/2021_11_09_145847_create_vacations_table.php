<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacations', function (Blueprint $table) {
            $table->id();
            $table->string('country', 100);
            $table->date('departure_date');
            $table->time('time_departure_date');
            $table->date('arrive_date');
            $table->time('time_arrive_date');
            $table->smallInteger('price');
            $table->smallInteger('advance_payment');
            $table->smallInteger('balance');
            $table->text('to_bring_in_suitcase');
            $table->text('itinerary');
            $table->text('includes_in_the_quote');
            $table->text('not_includes_in_the_quote');
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
        Schema::dropIfExists('vacations');
    }
}
