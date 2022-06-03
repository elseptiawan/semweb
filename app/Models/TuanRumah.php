<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuanRumah extends Model
{
    use HasFactory;
    protected $table='tuan_rumah';
    protected $guarded = ['id'];
}
