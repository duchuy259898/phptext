<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flights extends Model
{
    protected $table = 'flights';
    protected $primaryKey = 'id';
    protected $visible = ['name', 'address','mobile'];
    use HasFactory;
}
