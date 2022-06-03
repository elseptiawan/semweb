<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emas extends Model
{
    use HasFactory;
    protected $table='emas';
    protected $guarded = ['id'];
}
