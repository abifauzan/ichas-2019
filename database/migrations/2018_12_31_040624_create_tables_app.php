<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesApp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_role')->unsigned();
            $table->integer('id_payment_type')->unsigned();
            $table->string('name', 50);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('payment_types', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('type')->nullable();
            $table->string('price')->nullable();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_role')->unsigned();
            $table->string('image',100);
            $table->string('note',50)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });

        Schema::create('user_seminars', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('pin_entrance', 6)->unique();
            $table->string('certificate_no', 10);
            $table->tinyInteger('status_certificate');
            $table->timestamps();
        });

        Schema::create('user_conferences', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_paper')->unsigned();
            $table->string('pin_entrance', 6)->unique();
            $table->string('certificate_no', 10);
            $table->tinyInteger('category_certificate');
            $table->tinyInteger('status_certificate');
            $table->timestamps();
        });

        Schema::create('paper_registrants', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('title_paper');
            $table->text('abstract_paper');
            $table->string('file',100)->nullable();
            $table->tinyInteger('approval')->default(0);
            $table->tinyInteger('publish')->default(0);
            $table->timestamps();
        });

        Schema::create('helpers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slug',50);
            $table->string('description', 100)->nullable();
            $table->date('date_end')->nullable();
            $table->tinyInteger('status');
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',30);
            $table->string('slug',30);
            $table->string('description',50);
        });

        Schema::create('local_students', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('nim');
            $table->string('nama');
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
        Schema::dropIfExists('verify_users');
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('user_seminars');
        Schema::dropIfExists('user_conferences');
        Schema::dropIfExists('paper_registrants');
        Schema::dropIfExists('helpers');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('local_students');
    }
}
