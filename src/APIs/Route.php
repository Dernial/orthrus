<?php

namespace MichaelCooke\Orthrus\Apis;

class Route extends Api
{
    public function __construct(Int $originId, Int $destinationId)
    {
        $this->base = 'route';
        $this->endpoint = $originId . '/' . $destinationId;
    }
}
