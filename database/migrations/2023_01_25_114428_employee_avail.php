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
            $table->integer('MondayStart');
            $table->integer('MondayEnd');
            $table->integer('TuesdayStart');
            $table->integer('TuesdayEnd');
            $table->integer('WednesdayStart');
            $table->integer('WednesdayEnd');
            $table->integer('ThursdayStart');
            $table->integer('ThursdayEnd');
            $table->integer('FridayStart');
            $table->integer('FridayEnd');
            $table->integer('SaturdayStart');
            $table->integer('SaturdayEnd');
            $table->integer('SundayStart');
            $table->integer('SundayEnd');
            $table->integer('EmployeeId');
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
