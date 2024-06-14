<?php

namespace App\DataObjects\Spotify;

use Spatie\LaravelData\Data;

/**
 * Modelize the OAuth Details that come from Spotify
 */
final class OAuthDetailsDTO extends Data {
    public function __construct(
        public readonly string $access_token,
        public readonly ?string $refresh_token, // It may not be present
        public readonly int $expires_in,
        public readonly string $token_type,
        public readonly string $scope
    ) {}
}
