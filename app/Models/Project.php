<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends model
{
    use hasfactory;

    protected $fillable = [
        'name',
        'description',
        'team_id',
    ];

    public function tasks(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasmany(task::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsto(user::class);
    }

    public function team(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsto(team::class);
    }
}
