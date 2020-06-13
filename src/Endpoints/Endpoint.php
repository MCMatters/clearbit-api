<?php

declare(strict_types=1);

namespace McMatters\ClearbitApi\Endpoints;

use McMatters\Ticl\Client;

use const null;

/**
 * Class Endpoint
 *
 * @package McMatters\ClearbitApi\Endpoints
 */
abstract class Endpoint
{
    /**
     * @var \McMatters\Ticl\Client
     */
    protected $httpClient;

    /**
     * Endpoint constructor.
     *
     * @param string|null $apiKey
     */
    public function __construct(string $apiKey = null)
    {
        $this->httpClient = new Client([
            'headers' => $apiKey
                ? ['Authorization' => "Bearer {$apiKey}"]
                : []
        ]);
    }
}
