<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrayCountToSeedlingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seedlings', function (Blueprint $table) {
            if (!Schema::hasColumn('seedlings', 'tray_count')) {
                $table->integer('tray_count')->default(0);
            }
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seedlings', function (Blueprint $table) {
            $table->dropColumn('tray_count');
        });
    }
}
