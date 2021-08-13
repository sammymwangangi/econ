<?php

namespace App\Models\Prod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueStream extends Model
{
    use HasFactory;

    public $guarded= [];

    public function machines()
    {
        return $this->hasMany(Machine::class);
    }
}
