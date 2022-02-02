<?php

namespace App\Models\Prod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueStream extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function machines()
    {
        return $this->hasMany(Machine::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function rejects()
    {
        return $this->hasMany(Reject::class);
    }

    public function availability_loss()
    {
        return $this->hasMany(AvailabilityLoss::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}