<?php

declare(strict_types=1);

namespace McMatters\ClearbitApi\Endpoints;

/**
 * Class Autocomplete
 *
 * @package McMatters\ClearbitApi\Endpoints
 */
class Autocomplete extends Endpoint
{
    /**
     * @param string $name
     *
     * @return array
     *
     * @throws \InvalidArgumentException
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     * @throws \McMatters\Ticl\Exceptions\RequestException
     */
    public function lookupByCompany(string $name): array
    {
        return $this->httpClient
            ->get(
                'https://autocomplete.clearbit.com/v1/companies/suggest',
                ['query' => ['query' => $name]]
            )
            ->json();
    }
}
