<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RequestedHoliday', function (Blueprint $table) {
            $table->id();
            $table->string('start_date')
            $table->string('end_date')
            $table->string('Reason')
            $table->integer('EmployeeId');
            $table->integer('status')->nullable();
            $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
    {
        Schema::dropIfExists('RequestedHoliday');
    }
   
};
