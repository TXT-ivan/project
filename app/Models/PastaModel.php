<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PastaModel extends Model
{
    protected $table = 'pasta';

    protected $fillable = [
        'id',
        'pasta_name',
        'text',
        'access_type',
        'active_time',
        'hash',
        'created_at'
    ];
}
