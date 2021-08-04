<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Human extends Model
{
    use HasFactory;

    protected $table = "humans";

    protected $fillable = [

        'age',
        'birth_date',
        'city',
        'civil_status',
        'created_at',
        'first_name',
        'gender',
        'id',
        'last_name',
        'occupation',
        'updated_at',

    ];

}