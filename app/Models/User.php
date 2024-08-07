<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Playlist;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Saloon\Http\Auth\AccessTokenAuthenticator;

class User extends Authenticatable
{
    use HasFactory,
        Notifiable,
        HasApiTokens;

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'spotify_token',
        'spotify_refresh_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
        ];
    }

    public function isAuthenticatedViaOAuth(): bool
    {
        return ! is_null( $this->oauth_provider );
    }

    public function isSpotifyAccountLinked(): bool
    {
        return ! is_null( $this->spotify_id );
    }

    public function scopeWithSpotifyAccountLinked( $query )
    {
        return $query->whereNotNull( 'spotify_id' );
    }

    public function playlists(): HasMany {
        return $this->hasMany( Playlist::class );
    }

    public function consumingPassportOAuthProvider(): HasOne {
        return $this->hasOne( ConsumingPassportOAuthProvider::class );
    }

    public function storeConsumingPassportOAuthProvider( AccessTokenAuthenticator $authenticator ): ConsumingPassportOAuthProvider
    {
        return $this->consumingPassportOAuthProvider()->updateOrCreate(
            [
                'user_id' => $this->id,
            ],
            [
                'access_token'  => $authenticator->getAccessToken(),
                'refresh_token' => $authenticator->getRefreshToken(),
                'expires_at'    => $authenticator->getExpiresAt(),
            ]
        );
    }

    public function getConsumingPassportOAuthProvider(): AccessTokenAuthenticator {
        return new AccessTokenAuthenticator(
            $this->consumingPassportOAuthProvider->access_token,
            $this->consumingPassportOAuthProvider->refresh_token,
            $this->consumingPassportOAuthProvider->expires_at,
        );
    }

    public static function current(): ?self
    {
        return auth()->user();
    }
}
