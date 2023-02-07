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
        Schema::create('EmployeeAvail', function (Blueprint $table) {
            $table->id();
            $table->integer('MondayStart')->nullable();
            $table->integer('MondayEnd')->nullable();
            $table->integer('TuesdayStart')->nullable();
            $table->integer('TuesdayEnd')->nullable();
            $table->integer('WednesdayStart')->nullable();
            $table->integer('WednesdayEnd')->nullable();
            $table->integer('ThursdayStart')->nullable();
            $table->integer('ThursdayEnd')->nullable();
            $table->integer('FridayStart')->nullable();
            $table->integer('FridayEnd')->nullable();
            $table->integer('SaturdayStart')->nullable();
            $table->integer('SaturdayEnd')->nullable();
            $table->integer('SundayStart')->nullable();
            $table->integer('SundayEnd')->nullable();
            $table->integer('EmployeeId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
  
};
