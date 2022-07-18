<?php

namespace App\Models;
// use App\Models\Site;
// use App\Models\Document;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['nom','email','mtva',  'emailSs',
    'emailFact',
    'adresse',
    'adresseSs',
    'tele',
    'observation',
    'siteInternet',];

    // /**
    //  * Get the user that owns the clients
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    // public function site(): BelongsTo
    // {
    //     return $this->belongsTo(Site::class);
    // }
    // /**
    //  * Get all of the comments for the clients
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function document(): HasMany
    // {
    //     return $this->hasMany(Document::class);
    // }
}
