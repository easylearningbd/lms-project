<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->unsigned();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->text('comment');
            $table->string('rating');
            $table->foreign('course_id')
                    ->references('id')->on('courses')
                    ->onDelete('cascade');

           $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->integer('instructor_id')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
