<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users01 extends Model
{
    protected $table = 'users01';
    protected $primaryKey = 'id';
    protected $fillable = ['email','password','name','country','sex','hobby'];
    use HasFactory;
}
