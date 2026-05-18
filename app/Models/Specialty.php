<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Specialty extends Model
{
    protected $fillable = [
        'title',
        'code',
        'cycle_commission_id',
        'department_id',
        'budget_places',
        'commercial_places',
        'price_per_year',
        'duration',
        'study_form',
        'description_title',
        'description',
        'stacks',
        'skills',
        'careers',
        'core_subjects',
        'image',
        'specialty_document',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'stacks'        => 'array',
        'skills'        => 'array',
        'careers'       => 'array',
        'core_subjects' => 'array',
        'is_active'     => 'boolean',
    ];

    public function cycleCommission(): BelongsTo
    {
        return $this->belongsTo(CycleCommission::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
