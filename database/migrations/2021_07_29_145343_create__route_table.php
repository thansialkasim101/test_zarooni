<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Employee_ID');
            $table->string('route_name');
            $table->Integer('rout_no');
            $table->timestamps();

            $table->foreign('Employee_ID')
                  ->references('id')
                  ->on('employee');
               
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('route');
    }
}
