<?php

declare(strict_types = 1);

namespace McMatters\ClearbitApi\Endpoints;

/**
 * Class Discovery
 *
 * @package McMatters\ClearbitApi\Endpoints
 */
class Discovery extends Endpoint
{
    /**
     * @param array $query
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     * @throws \McMatters\Ticl\Exceptions\RequestException
     */
    public function search(array $query): array
    {
        return $this->httpClient
            ->get(
                'https://discovery.clearbit.com/v1/companies/search',
                ['query' => $query]
            )
            ->json();
    }
}
