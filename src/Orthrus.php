<?php

namespace MichaelCooke\Orthrus;

use Eseye;
use Carbon\Carbon;
use Seat\Eseye\Containers\EsiResponse;

class Orthrus
{
    protected $eseye;
    protected $resetRefreshToken = false;
    protected $response = null;

    public function __construct()
    {
        $this->eseye = new Eseye;
    }

    public function setRefreshToken(string $token): self
    {
        $this->eseye::setRefreshToken($token);

        return $this;
    }

    public function withRefreshToken(string $token): self
    {
        $this->resetRefreshToken = true;

        return $this->setRefreshToken($token);
    }

    public function resetRefreshToken(): bool
    {
        if ($this->resetRefreshToken) {
            $this->setRefreshToken(config('eseye.refresh_token'));

            return true;
        }

        return false;
    }

    public function invoke(string $verb, string $endpoint, array $uri_data = null, array $body = null, array $query = null): EsiResponse
    {
        if ($body != null) {
            $this->eseye::setBody($body);
        }

        if ($query != null) {
            $this->eseye::setQuerystring($query);
        }

        if ($uri_data != null) {
            return $this->eseye::invoke($verb, $endpoint, $uri_data);
        }

        return $this->eseye::invoke($verb, $endpoint);
    }

    public function setResponse(EsiResponse $esiResponse): bool
    {
        $this->response = $esiResponse;

        return true;
    }

    public function response(): EsiResponse
    {
        return $this->response;
    }

    public function responseExpires(): Carbon
    {
        return $this->response->expires();
    }

    public function responseCode(): int
    {
        return $this->response->getErrorCode();
    }

    public function responseErrorMessage(): ?string
    {
        return $this->response->error();
    }

    public function __call(string $method, array $arguments)
    {
        $class = 'MichaelCooke\\Orthrus\\APIs\\' . ucfirst($method);
        $api = new $class(...$arguments);

        if ($method == 'search' ||
            $method == 'status' ||
            $method == 'route' ||
            $method == 'incursions') {
            return $api->execute();
        }

        return $api;
    }
}
