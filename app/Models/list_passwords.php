<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_passwords extends Model
{

    protected $table = 'list_passwords';
    protected $fillable = [
        'id',
        'name',
        'username',
        'password',
        'created_at',
        'updated_at'

    ];

    use HasFactory;
}
