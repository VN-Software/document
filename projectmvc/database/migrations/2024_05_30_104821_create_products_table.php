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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            // $table->decimal('price',8,2);
            $table->bigInteger('price');
            $table->integer('quantity');

            $table->foreignId("category_id")->constrained()->onDelete("cascade");
            // ->constrained(): Thiết lập khóa ngoại liên kết với bảng categories dựa trên quy ước tên bảng và cột (mặc định là id).
            // ->onDelete('cascade'): Thiết lập hành vi khi bản ghi liên quan bị xóa:
            // cascade: Khi một bản ghi trong bảng categories bị xóa, tất cả các bản ghi liên quan trong bảng products cũng sẽ bị xóa theo.

            $table->timestamps();
            // tạo hai cột created_at và updated_at trong bảng products:
            // created_at: Lưu trữ thời gian tạo bản ghi.
            // updated_at: Lưu trữ thời gian cập nhật bản ghi cuối cùng.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
