<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'created_date',
        'start_date',
        'end_date',
        'closed_date',
        'recipient_id',
        'creator_id',
        'project_id',
        'org_id',
        'metric_id',
        'status',
        'public',
        'street',
        'location_id',
        'city_id',
        'state_id',
        'country_id',
        'latitude',
        'longitude',
        'cause_id',
    ];

    protected $casts = [
        'created_date' => 'datetime',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'closed_date' => 'datetime',
        'latitude' => 'float',
        'longitude' => 'float',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function recipient()
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
