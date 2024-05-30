<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
	protected $table = 'gender_record';

    protected $fillable = [
        'name'
    ];
}
