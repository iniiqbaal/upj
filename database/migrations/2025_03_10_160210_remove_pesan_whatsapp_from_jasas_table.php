<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('jasas', function (Blueprint $table) {
            $table->dropColumn('pesan_whatsapp');
        });
    }

    public function down()
    {
        Schema::table('jasas', function (Blueprint $table) {
            $table->text('pesan_whatsapp')->nullable();
        });
    }
};
