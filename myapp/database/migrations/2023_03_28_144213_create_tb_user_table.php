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
        Schema::create('tb_user', function (Blueprint $table) {
            $table->id('user_id');// đây là cột primary key và tự động tăng. Tên cột là user_id.
            $table->string('name');
            $table->string('username')->unique();//đây là cột lưu trữ tên đăng nhập của người dùng và giá trị trong cột này phải là duy nhất (unique).
            $table->string('password');
            $table->timestamps();//đây là 2 cột tự động lưu trữ thời gian tạo và cập nhật bản ghi.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_user');
    }
};
