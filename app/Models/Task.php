<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at', 'start_at', 'end_at'];

    protected $guarded = [];

    protected $fillable = [
        'name',
        'description',
        'assigned_to',
        'user_id',
        'status',
        'start_at',
        'end_at',
        'priority',
        'taskfile',
    ];

    public function scopeOfStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function isAssigned(){
        return (bool) $this->assigned_to;
    }

    public function isNotAssigned(){
        return ! $this->isAssigned();
    }
}
