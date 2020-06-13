<?php

declare(strict_types=1);

namespace McMatters\ClearbitApi;

use McMatters\ClearbitApi\Endpoints\{
    Autocomplete, Combined, Company, Discovery, NameToDomain, Person,
    Prospector, Reveal, Risk
};

use const null;

/**
 * Class ClearbitClient
 *
 * @package McMatters\ClearbitApi
 */
class ClearbitClient
{
    /**
     * @var string|null
     */
    protected $apiKey;

    /**
     * @var array
     */
    protected $endpoints = [];

    /**
     * ClearbitClient constructor.
     *
     * @param string|null $apiKey
     */
    public function __construct(string $apiKey = null)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return \McMatters\ClearbitApi\Endpoints\Autocomplete
     */
    public function autocomplete(): Autocomplete
    {
        return $this->endpoint(Autocomplete::class);
    }

    /**
     * @return \McMatters\ClearbitApi\Endpoints\Combined
     */
    public function combined(): Combined
    {
        return $this->endpoint(Combined::class);
    }

    /**
     * @return \McMatters\ClearbitApi\Endpoints\Company
     */
    public function company(): Company
    {
        return $this->endpoint(Company::class);
    }

    /**
     * @return \McMatters\ClearbitApi\Endpoints\Discovery
     */
    public function discovery(): Discovery
    {
        return $this->endpoint(Discovery::class);
    }

    /**
     * @return \McMatters\ClearbitApi\Endpoints\NameToDomain
     */
    public function nameToDomain(): NameToDomain
    {
        return $this->endpoint(NameToDomain::class);
    }

    /**
     * @return \McMatters\ClearbitApi\Endpoints\Person
     */
    public function person(): Person
    {
        return $this->endpoint(Person::class);
    }

    /**
     * @return \McMatters\ClearbitApi\Endpoints\Prospector
     */
    public function prospector(): Prospector
    {
        return $this->endpoint(Prospector::class);
    }

    /**
     * @return \McMatters\ClearbitApi\Endpoints\Reveal
     */
    public function reveal(): Reveal
    {
        return $this->endpoint(Reveal::class);
    }

    /**
     * @return \McMatters\ClearbitApi\Endpoints\Risk
     */
    public function risk(): Risk
    {
        return $this->endpoint(Risk::class);
    }

    /**
     * @param string $class
     *
     * @return mixed
     */
    protected function endpoint(string $class)
    {
        if (!isset($this->endpoints[$class])) {
            $this->endpoints[$class] = new $class($this->apiKey);
        }

        return $this->endpoints[$class];
    }
}
