<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // table name
    protected $table = 'authors';

    // table fields
    protected $fillable = [
        'name',
        'location'
    ];
}
