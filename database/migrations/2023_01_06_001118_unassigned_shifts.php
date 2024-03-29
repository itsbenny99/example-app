
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
         Schema::create('unassigned_shifts', function (Blueprint $table) {
              $table->id();
                $table->string('date');
                $table->string('start_time');
                $table->string('end_time');
                $table->integer('permission')->nullable();
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
        Schema::dropIfExists('unassigned_shifts');
    }
};
