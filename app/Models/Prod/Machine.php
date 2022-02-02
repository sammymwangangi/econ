<?php

namespace App\Models\Prod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function stationeries(){
        return $this->hasMany(Stationery::class);
    }

    public function value_stream()
    {
        return $this->belongsTo(ValueStream::class);
    }
}
