<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ConsumingPassportOAuthProvider extends Model
{
    use HasFactory;

    protected $table = 'consuming_passport_oauth_providers';

    protected $guarded = [];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    public function casts(): array {
        return [
            'expires_at' => 'immutable_datetime',
        ];
    }

    public function user(): BelongsTo {
        return $this->belongsTo( User::class );
    }
}
