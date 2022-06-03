<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perunggu extends Model
{
    use HasFactory;
    protected $table='perunggu';
    protected $guarded = ['id'];
}
