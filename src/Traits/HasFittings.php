<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasFittings
{
    protected function fittings()
    {
        $this->endpoint = $this->id . '/fittings';
    }

    protected function createFitting($fitting)
    {
        $this->verb = 'post';
        $this->body = $fitting;
        $this->endpoint = $this->id . '/fittings';
    }

    protected function deleteFitting($fittingId)
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/fittings/' . $fittingId;
    }
}
