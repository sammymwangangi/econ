<?php

namespace App\Models\Prod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function employees(){
        return $this->hasMany(Employee::class);
    }
    public function reports(){
        return $this->hasMany(Report::class);
    }
}
