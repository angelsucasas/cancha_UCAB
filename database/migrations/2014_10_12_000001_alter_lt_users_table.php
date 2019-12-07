<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterLtUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name',100);
                $table->string('firstname',100)->default('firstname');
                $table->string('lastname',100)->default('lastname');
                $table->string('email',100)->unique();
                $table->string('password', 60);
                $table->timestamps();
            });
        } else {
            Schema::table('users', function (Blueprint $table) {
                if (!Schema::hasColumn('users', 'name')) {
                    $table->string('name')->default('name');
                }
                if (!Schema::hasColumn('users', 'firstname')) {
                    $table->string('firstname')->default('firstname');
                }
                if (!Schema::hasColumn('users', 'lastname')) {
                    $table->string('lastname')->default('lastname');
                }
                if (!Schema::hasColumn('users', 'email')) {
                    $table->string('email')->default('user_'.rand(100000, 999999).'@kendozone.com')->unique();
                }

                if (!Schema::hasColumn('users', 'password')) {
                    $table->string('password', 60)->default('kendozone');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
