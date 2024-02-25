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
      Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->string("name_service");
        $table->date("start_Service");
        $table->date("deadline_service");
        $table->integer("discount")->nullable();
        $table->string("type_service")->default('Fijo');
        $table->date("start_discount");
        $table->date("deadline_discount");
        $table->timestamps();
        $table->softDeletes();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
