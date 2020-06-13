<?php

declare(strict_types=1);

namespace McMatters\ClearbitApi\Endpoints;

/**
 * Class Person
 *
 * @package McMatters\ClearbitApi\Endpoints
 */
class Person extends Endpoint
{
    /**
     * @param string $email
     * @param array $query
     *
     * @return array
     *
     * @throws \InvalidArgumentException
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     * @throws \McMatters\Ticl\Exceptions\RequestException
     */
    public function lookupByEmail(string $email, array $query = []): array
    {
        return $this->httpClient
            ->get(
                'https://person.clearbit.com/v2/people/find',
                ['query' => ['email' => $email] + $query]
            )
            ->json();
    }

    /**
     * @param string $id
     * @param array $body
     *
     * @return array
     *
     * @throws \InvalidArgumentException
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     * @throws \McMatters\Ticl\Exceptions\RequestException
     */
    public function flag(string $id, array $body = []): array
    {
        return $this->httpClient
            ->post(
                "https://person.clearbit.com/v1/people/{$id}/flag",
                ['json' => $body]
            )
            ->json();
    }
}
