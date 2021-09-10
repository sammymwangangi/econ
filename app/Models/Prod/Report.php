<?php

namespace App\Models\Prod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function value_stream()
    {
        return $this->belongsTo(ValueStream::class);
    }
    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function operators()
    {
        return $this->hasMany(Employee::class, 'foreign_key', 'operator_id');
    }

    public function availabilityLosses()
    {
        return $this->hasMany(AvailabilityLoss::class);
    }

    public function losses()
    {
        return $this->hasMany(Loss::class);
    }

    public function rejects()
    {
        return $this->hasMany(Reject::class);
    }
}
