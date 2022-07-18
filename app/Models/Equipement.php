<?php

namespace App\Models;
use App\Models\Document;
use App\Models\Batiment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    use HasFactory;

    /**
     * Get the batiment that owns the Equipements
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function batiment(): BelongsTo
    {
        return $this->belongsTo(Batiment::class);
    }

    /**
     * Get all of the comments for the Equipements
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function document(): HasMany
    {
        return $this->hasMany(Document::class);
    }
    
}
