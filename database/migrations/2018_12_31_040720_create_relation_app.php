<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationApp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // define the foreign key
        Schema::table('users', function($table) {
            $table->foreign('id_role')
                ->references('id')->on('roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('users', function($table) {
            $table->foreign('id_payment_type')
                ->references('id')->on('payment_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('transactions', function($table) {
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('transactions', function($table) {
            $table->foreign('id_role')
                ->references('id')->on('roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('user_seminars', function($table) {
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('user_conferences', function($table) {
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('user_conferences', function($table) {
            $table->foreign('id_paper')
                ->references('id')->on('paper_registrants')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('paper_registrants', function($table) {
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('local_students', function($table) {
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });


    }
}
