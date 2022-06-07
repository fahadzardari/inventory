<?php

use Illuminate\Console\Command;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string("operation")->comment("Operation executed(increment,delete etc)");
            $table->unsignedInteger("category_id")->comment("Category changes made to");
            $table->string("category_name")->comment("Category changes made to");
            $table->unsignedInteger("item_id")->comment("Item changes made to");
            $table->unsignedInteger("quantity")->nullable()->comment("Quantity changed if any");
            $table->text("reason")->nullable()->comment("reason changes made");
            $table->unsignedInteger("user_id")->comment("changes made by");
            $table->string("user_name")->comment("user name");
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
        Schema::dropIfExists('logs');
    }
}
