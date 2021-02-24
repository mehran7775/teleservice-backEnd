<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->char('name',15);
            $table->char('username',15)->unique();
            $table->char('number_meli',10)->default(0);
            $table->char('role',10)->default(0);
            $table->char('email',35)->unique();
//            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('code')->default(0);
            $table->integer('status')->default(0);
            $table->rememberToken();
            $table->timestamps();

        });
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
