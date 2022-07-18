<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    /**
     * Get all of the comment for the site
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function intervention(): HasMany
    {
        return $this->hasMany(Intervention::class);
    }
    public function client(): HasMany
    {
        return $this->hasMany(Client::class);
    }
    public function batiment(): HasMany
    {
        return $this->hasMany(Batiment::class);
    }
    
    public function document(): HasMany
    {
        return $this->hasMany(Document::class);
    }
    
    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
