<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stationery extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function machine()
    {
        return $this->belongsTo('App\Models\Prod\Machine');
    }
    public function shift()
    {
        return $this->belongsTo('App\Models\Prod\Shift');
    }
}
