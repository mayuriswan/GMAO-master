<?php

namespace App\Models;
use App\Models\Site;
use App\Models\Intervention;
use App\Models\Client;
use App\Models\Equipement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    /**
     * The roles that belong to the documents
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function intervention(): BelongsToMany
    {
        return $this->belongsToMany(Intervention::class);
    }

    public function site(): BelongsToMany
    {
        return $this->belongsToMany(Site::class);

    }
    public function client(): BelongsToMany
    {
        return $this->belongsToMany(Client::class);
    }
    public function equipement(): BelongsToMany
    {
        return $this->belongsToMany(Equipement::class);
    }
}
