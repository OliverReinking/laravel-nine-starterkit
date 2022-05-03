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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->default(false)->after('profile_photo_path');
            $table->boolean('is_employee')->default(false)->after('is_admin');
            $table->boolean('is_customer')->default(false)->after('is_employee');
            $table->timestamp('last_login_at')->nullable()->after('is_customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_admin');
            $table->dropColumn('is_employee');
            $table->dropColumn('is_customer');
            $table->dropColumn('last_login_at');
        });
    }
};
