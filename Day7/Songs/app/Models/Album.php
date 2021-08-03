<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = "albums";

    protected $fillable = [

        'created_at',
        'date_released',
        'id',
        'name',
        'updated_at',

    ];

}