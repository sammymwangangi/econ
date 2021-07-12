<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends model
{
    use hasfactory;

    protected $fillable = [
        'name',
        'description',
        'team_id',
    ];

    public function tasks()
    {
        return $this->hasmany(Task::class);
    }

    public function user()
    {
        return $this->belongsto(User::class);
    }

    public function team()
    {
        return $this->belongsto(Team::class);
    }
}
