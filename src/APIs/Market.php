<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Market extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'markets';
        $this->orthrus = $orthrus;
    }

    protected function prices()
    {
        $this->endpoint = 'prices';
    }

    protected function orders(Int $regionId)
    {
        $this->endpoint = $regionId . '/orders';
    }

    protected function history(Int $regionId, Int $typeId)
    {
        $this->query = ['type_id' => $typeId];
        $this->endpoint = $regionId . '/history';
    }

    protected function structureOrders(Int $structureId)
    {
        $this->endpoint = 'structures/' . $structureId;
    }

    protected function itemGroups()
    {
        $this->endpoint = 'groups';
    }

    protected function itemGroup(Int $groupId)
    {
        $this->endpoint = 'groups/' . $groupId;
    }

    protected function itemTypes(Int $regionId)
    {
        $this->endpoint = $regionId . '/types';
    }
}
