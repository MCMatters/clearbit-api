<?php

declare(strict_types = 1);

namespace McMatters\ClearbitApi\Endpoints;

/**
 * Class Prospector
 *
 * @package McMatters\ClearbitApi\Endpoints
 */
class Prospector extends Endpoint
{
    /**
     * @param array $query
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     * @throws \McMatters\Ticl\Exceptions\RequestException
     */
    public function personSearch(array $query): array
    {
        return $this->httpClient
            ->get(
                'https://prospector.clearbit.com/v1/people/search',
                ['query' => $query]
            )
            ->json();
    }
}
