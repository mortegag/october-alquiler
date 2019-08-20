<?php namespace Arredamiento\Alquiler\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePedidosTable extends Migration
{
    public function up()
    {
        Schema::create('arredamiento_alquiler_pedidos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description');
            $table->datetime('ends_at');
            $table->integer('team_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('arredamiento_alquiler_pedidos');
    }
}
