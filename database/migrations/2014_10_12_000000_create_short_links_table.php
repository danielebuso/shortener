<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateShortLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_links', function (Blueprint $table) {

            // ID
            $table->string('id');

            // FK
            // ...

            // Data
            $table->string('url')->nullable();
            $table->date('not_before')->nullable();
            $table->date('expire_at')->nullable();
            $table->boolean('enabled')->default(true);

            // Other
            $table->timestamps();

            // Indexes
            $table->primary('id');

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
