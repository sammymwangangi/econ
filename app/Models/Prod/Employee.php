<?php

namespace App\Models\Prod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $guarded = [];

    public function shift(){
        return $this->belongsTo(Shift::class, 'foreign_key', 'operator_id');
    }
}
