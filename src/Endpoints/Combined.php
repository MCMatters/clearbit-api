<?php

declare(strict_types = 1);

namespace McMatters\ClearbitApi\Endpoints;

/**
 * Class Combined
 *
 * @package McMatters\ClearbitApi\Endpoints
 */
class Combined extends Endpoint
{
    /**
     * @param string $email
     * @param array $query
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     * @throws \McMatters\Ticl\Exceptions\RequestException
     */
    public function lookupByEmail(string $email, array $query = []): array
    {
        return $this->httpClient
            ->get(
                'https://person.clearbit.com/v2/combined/find',
                ['query' => ['email' => $email] + $query]
            )
            ->json();
    }
}
