<?php

declare(strict_types = 1);

namespace McMatters\ClearbitApi\Endpoints;

/**
 * Class Company
 *
 * @package McMatters\ClearbitApi\Endpoints
 */
class Company extends Endpoint
{
    /**
     * @param string $domain
     * @param array $query
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     * @throws \McMatters\Ticl\Exceptions\RequestException
     */
    public function lookupByDomain(string $domain, array $query = []): array
    {
        return $this->httpClient
            ->get(
                'https://company.clearbit.com/v2/companies/find',
                ['query' => ['domain' => $domain] + $query]
            )
            ->json();
    }

    /**
     * @param string $domain
     * @param array $body
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     * @throws \McMatters\Ticl\Exceptions\RequestException
     */
    public function flag(string $domain, array $body = []): array
    {
        return $this->httpClient
            ->post(
                'https://company.clearbit.com/v2/companies/flag',
                ['json' => $body, ['query' => ['domain' => $domain]]]
            )
            ->json();
    }
}
