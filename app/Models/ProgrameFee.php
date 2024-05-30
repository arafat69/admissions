<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrameFee extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function programType()
    {
        return $this->belongsTo(ProgramType::class);
    }
}
