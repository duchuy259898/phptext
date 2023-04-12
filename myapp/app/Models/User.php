<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;//????
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable//cung cấp các phương thức cho việc xác thực người dùng (authentication) và phân quyền (authorization).
{
    use HasFactory;

    protected $table = 'tb_user';
    protected $primarykey = 'user_id';
    protected $fillable = ['name','username','password'];
}
