<?php

namespace App\JsonApi\V1;

use App\JsonApi\V1\Artists\ArtistSchema;
use App\JsonApi\V1\Tracks\TrackSchema;
use LaravelJsonApi\Core\Server\Server as BaseServer;

class Server extends BaseServer
{

    /**
     * The base URI namespace for this server.
     *
     * @var string
     */
    protected string $baseUri = '/api/v1';

    /**
     * Bootstrap the server when it is handling an HTTP request.
     *
     * @return void
     */
    public function serving(): void
    {
        // no-op
    }

    /**
     * Get the server's list of schemas.
     *
     * @return array
     */
    protected function allSchemas(): array
    {
        return [
            ArtistSchema::class,
            TrackSchema::class
        ];
    }

    /**
     * Disable auth as we use Laravel's middleware instead
     *
     * @return boolean
     */
    public function authorizable(): bool
    {
        return false;
    }
}
