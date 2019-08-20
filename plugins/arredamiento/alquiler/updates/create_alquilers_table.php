<?php namespace Arredamiento\Alquiler\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAlquilersTable extends Migration
{
    public function up()
    {
        Schema::create('arredamiento_alquiler_alquilers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('names', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('arredamiento_alquiler_alquilers');
    }
}
