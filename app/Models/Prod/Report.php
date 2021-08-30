<?php

namespace App\Models\Prod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    public function value_stream()
    {
        return $this->belongsTo(ValueStream::class);
    }
    public function machine()
    {
        return $this->belongsTo(Macine::class);
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function availabilityLosses()
    {
        return $this->hasMany(AvailabilityLoss::class);
    }

    public function rejects()
    {
        return $this->hasMany(Reject::class);
    }
}
