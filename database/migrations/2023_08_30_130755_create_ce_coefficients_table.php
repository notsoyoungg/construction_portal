<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('ce_coefficients', function (Blueprint $table) {
            $table->id();
            $table->string('terrain_condition');
            $table->decimal('value');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ce_coefficients');
    }
};
