<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = self::TABLE;

    const TABLE = 'accounts';

    protected $fillable = [
        'name',
        'reference',
        'currency',
        'type'
    ];
}
