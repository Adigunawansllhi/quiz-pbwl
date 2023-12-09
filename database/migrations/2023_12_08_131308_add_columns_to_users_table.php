<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('user_alamat')->nullable()->after('name');
            $table->string('user_hp', 20)->nullable()->after('user_alamat');
            $table->string('user_pos', 5)->nullable()->after('user_hp');
            $table->tinyInteger('user_role')->after('user_pos');
            $table->tinyInteger('user_aktif')->after('user_role');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('user_alamat');
            $table->dropColumn('user_hp');
            $table->dropColumn('user_pos');
            $table->dropColumn('user_role');
            $table->dropColumn('user_aktif');
        });
    }
}
