<?php

namespace App\Models\Prod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailabilityLoss extends Model
{
    use HasFactory;

    public function value_stream()
    {
        return $this->belongsTo(ValueStream::class);
    }
}
