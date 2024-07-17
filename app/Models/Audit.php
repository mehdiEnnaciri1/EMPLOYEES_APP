<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_type',
        'user_id',
        'event',
        'auditable_type',
        'auditable_id',
        'old_values',
        'new_values',
        'url',
        'ip_address',
        'user_agent',
        'tags',
    ];

    protected $casts = [
        'old_values' => 'json',
        'new_values' => 'json',
    ];

    // Si vous avez des colonnes de timestamp non standard
    // public const CREATED_AT = 'votre_colonne_created_at';
    // public const UPDATED_AT = 'votre_colonne_updated_at';

    public function auditable()
    {
        return $this->morphTo();
    }
}
