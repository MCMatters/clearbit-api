<?php

declare(strict_types = 1);

namespace McMatters\ClearbitApi\Endpoints;

/**
 * Class Reveal
 *
 * @package McMatters\ClearbitApi\Endpoints
 */
class Reveal extends Endpoint
{
    /**
     * @param string $ip
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     * @throws \McMatters\Ticl\Exceptions\RequestException
     */
    public function lookupByIp(string $ip): array
    {
        return $this->httpClient
            ->get(
                'https://reveal.clearbit.com/v1/companies/find',
                ['query' => ['ip' => $ip]]
            )
            ->json();
    }
}
