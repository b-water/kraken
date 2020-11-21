<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    use HasFactory;

    protected $table = self::TABLE;

    const TABLE = 'account_types';

    protected $fillable = [
        'name'
    ];
}
