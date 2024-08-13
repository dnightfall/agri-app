<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'seedling_id',
        'file_path',
    ];

    public function seedling()
    {
        return $this->belongsTo(Seedling::class);
    }
}
