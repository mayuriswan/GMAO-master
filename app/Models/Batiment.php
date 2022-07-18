<?php

namespace App\Models;

use App\Models\Site;
use App\Models\Equipement;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Batiment extends Model
{
    use HasFactory;

    /**
     * Get the site that owns the Batiments
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function site(): BelongsTo
    {
        return $this->belongsTo(Site::class);
    }
    /**
     * Get all of the equipemnet for the Batiments
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipement(): HasMany  //
    {
        return $this->hasMany(Equipement::class);
    }
}
