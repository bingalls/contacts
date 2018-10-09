<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->string('phone')->nullable(false);
            $table->string('city');
            $table->string('state', 2);
            $table->string('zip', 10);
            $table->timestamps();
            $table->softDeletes();

            $table->index('name');
            $table->index('email');
            $table->index('phone');

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
