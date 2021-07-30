 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transation', function (Blueprint $table) {
            $table->increments('id'); 
            $table->unsignedInteger('route_id');
            $table->unsignedInteger('rout_no');
            $table->unsignedInteger('total_amount');
            $table->unsignedInteger('total_hour');
            $table->timestamps();

            $table->foreign('route_id')
                  ->references('id')
                  ->on('route');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transation');
    }
}