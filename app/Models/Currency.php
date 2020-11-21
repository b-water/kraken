<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $table = self::TABLE;

    const TABLE = 'currencies';

    protected $fillable = [
        'name'
    ];
}
