<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyTrayCountColumnInSeedlingsTable extends Migration
{
    public function up()
    {
        Schema::table('seedlings', function (Blueprint $table) {
            // Contoh perubahan: mengubah default value menjadi 0
            $table->integer('tray_count')->default(0)->change();
        });
    }

    public function down()
    {
        Schema::table('seedlings', function (Blueprint $table) {
            // Contoh rollback: mengembalikan default value sebelumnya
            $table->integer('tray_count')->change();
        });
    }
}
