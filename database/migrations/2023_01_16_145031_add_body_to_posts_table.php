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
        Schema::table('postmake', function (Blueprint $table) {
            $table->longText('bodydos')->after('title');
            /*after añade la columna despues */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('postmake', function (Blueprint $table) {
            $table->dropColumn('bodydos');
        });
    }
};