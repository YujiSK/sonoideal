<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Initialization extends Model
{
    use HasFactory;

    protected $table = 'initialization';
    protected $fillable = ['temperature', 'humidity', 'light','type'];
}