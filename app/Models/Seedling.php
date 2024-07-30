<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seedling extends Model
{
    use HasFactory;

    protected $fillable = [
        'planting_date',
        'seed_name',
        'tray_count',
    ];
}
