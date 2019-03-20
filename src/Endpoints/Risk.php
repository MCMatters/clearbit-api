<?php

declare(strict_types = 1);

namespace McMatters\ClearbitApi\Endpoints;

/**
 * Class Risk
 *
 * @package McMatters\ClearbitApi\Endpoints
 */
class Risk extends Endpoint
{
    /**
     * @param array $body
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     * @throws \McMatters\Ticl\Exceptions\RequestException
     */
    public function calculate(array $body): array
    {
        return $this->httpClient
            ->post('https://risk.clearbit.com/v1/calculate', ['json' => $body])
            ->json();
    }

    /**
     * @param array $body
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     * @throws \McMatters\Ticl\Exceptions\RequestException
     */
    public function flag(array $body): array
    {
        return $this->httpClient
            ->post('https://risk.clearbit.com/v1/flag', ['json' => $body])
            ->json();
    }
}
