<?php

declare(strict_types=1);

namespace McMatters\ClearbitApi\Endpoints;

/**
 * Class NameToDomain
 *
 * @package McMatters\ClearbitApi\Endpoints
 */
class NameToDomain extends Endpoint
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
                'https://company.clearbit.com/v1/domains/find',
                ['query' => ['name' => $name]]
            )
            ->json();
    }
}
