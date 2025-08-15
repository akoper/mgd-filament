<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Process extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'org_id',
        'creator_id',
        'description',
        'project_id',
        'metric_id',
        'length'
    ];

    /**
     * Get the organization that owns the process.
     */
    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class, 'org_id');
    }

    /**
     * Get the user that created the process.
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    /**
     * Get the project that the process belongs to.
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get the metric associated with the process.
     * Note: This relationship assumes a Metric model exists or will be created.
     */
    public function metric(): BelongsTo
    {
        return $this->belongsTo(Metric::class);
    }
}
