<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('characteristic_snows', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->integer('category');
            $table->decimal('snow_value');
        });
    }

    public function down()
    {
        Schema::dropIfExists('characteristic_snows');
    }
};
