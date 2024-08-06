<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $spotify_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Track> $tracks
 * @property-read int|null $tracks_count
 * @method static \Illuminate\Database\Eloquent\Builder|Artist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Artist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Artist query()
 * @method static \Illuminate\Database\Eloquent\Builder|Artist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artist whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artist whereSpotifyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Artist whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperArtist {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $access_token
 * @property string $refresh_token
 * @property \Carbon\CarbonImmutable $expires_at
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|ConsumingPassportOAuthProvider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConsumingPassportOAuthProvider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConsumingPassportOAuthProvider query()
 * @method static \Illuminate\Database\Eloquent\Builder|ConsumingPassportOAuthProvider whereAccessToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsumingPassportOAuthProvider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsumingPassportOAuthProvider whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsumingPassportOAuthProvider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsumingPassportOAuthProvider whereRefreshToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsumingPassportOAuthProvider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsumingPassportOAuthProvider whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperConsumingPassportOAuthProvider {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $spotify_id
 * @property string $name
 * @property string|null $description
 * @property string|null $thumbnail_url
 * @property string $owner
 * @property int $is_public
 * @property int $is_collaborative
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Playlist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Playlist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Playlist query()
 * @method static \Illuminate\Database\Eloquent\Builder|Playlist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Playlist whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Playlist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Playlist whereIsCollaborative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Playlist whereIsPublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Playlist whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Playlist whereOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Playlist whereSpotifyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Playlist whereThumbnailUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Playlist whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Playlist whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperPlaylist {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $spotify_id
 * @property string $name
 * @property int $duration_ms
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Artist> $artists
 * @property-read int|null $artists_count
 * @method static \Illuminate\Database\Eloquent\Builder|Track newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Track newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Track query()
 * @method static \Illuminate\Database\Eloquent\Builder|Track whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Track whereDurationMs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Track whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Track whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Track whereSpotifyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Track whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperTrack {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $avatar
 * @property string|null $oauth_provider
 * @property string|null $oauth_provider_id
 * @property string|null $spotify_id
 * @property string|null $spotify_token
 * @property string|null $spotify_refresh_token
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Passport\Client> $clients
 * @property-read int|null $clients_count
 * @property-read \App\Models\ConsumingPassportOAuthProvider|null $consumingPassportOAuthProvider
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Playlist> $playlists
 * @property-read int|null $playlists_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Passport\Token> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOauthProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOauthProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSpotifyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSpotifyRefreshToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSpotifyToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withSpotifyAccountLinked()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

