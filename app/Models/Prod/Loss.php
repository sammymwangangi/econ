<?php

namespace App\Models\Prod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loss extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function value_stream()
    {
        return $this->belongsTo(ValueStream::class);
    }
}
