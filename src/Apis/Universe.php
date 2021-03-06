<?php

namespace MichaelCooke\Orthrus\Apis;

class Universe extends Api
{
    public function __construct()
    {
        $this->base = 'universe';
    }

    protected function ancestries(): void
    {
        $this->endpoint = 'ancestries';
    }

    protected function bloodlines(): void
    {
        $this->endpoint = 'bloodlines';
    }

    protected function category(int $categoryId): void
    {
        $this->endpoint = 'category/' . $categoryId;
    }

    protected function categories(): void
    {
        $this->endpoint = 'categories';
    }

    protected function constellations(): void
    {
        $this->endpoint = 'constellations';
    }

    protected function constellation(int $constellationId): void
    {
        $this->endpoint = 'constellations/' . $constellationId;
    }

    protected function factions(): void
    {
        $this->endpoint = 'factions';
    }

    protected function graphics(): void
    {
        $this->endpoint = 'graphics';
    }

    protected function graphic(int $graphicId): void
    {
        $this->endpoint = 'graphics/' . $graphicId;
    }

    protected function group(int $groupId): void
    {
        $this->endpoint = 'groups/' . $groupId;
    }

    protected function groups(): void
    {
        $this->endpoint = 'groups';
    }

    protected function ids(array $names): void
    {
        $this->verb = 'post';
        $this->body = $names;
        $this->endpoint = 'ids';
    }

    protected function moon(int $moonId): void
    {
        $this->endpoint = 'moons/' . $moonId;
    }

    protected function names(array $ids): void
    {
        $this->verb = 'post';
        $this->body = $ids;
        $this->endpoint = 'names';
    }

    protected function planet(int $planetId): void
    {
        $this->endpoint = 'planets/' . $planetId;
    }

    protected function races(): void
    {
        $this->endpoint = 'races';
    }

    protected function regions(): void
    {
        $this->endpoint = 'regions';
    }

    protected function region(int $regionId): void
    {
        $this->endpoint = 'regions/' . $regionId;
    }

    protected function schematic(int $schematicId): void
    {
        $this->endpoint = 'schematics/' . $schematicId;
    }

    protected function star(int $starId): void
    {
        $this->endpoint = 'stars/' . $starId;
    }

    protected function stargate(int $stargateId): void
    {
        $this->endpoint = 'stargates/' . $starGateId;
    }

    protected function station(int $stationId): void
    {
        $this->endpoint = 'stations/' . $stationId;
    }

    protected function structures(): void
    {
        $this->endpoint = 'structures';
    }

    protected function structure(int $structureId): void
    {
        $this->endpoint = 'structures/' . $planetId;
    }

    protected function system(int $systemId): void
    {
        $this->endpoint = 'systems/' . $systemId;
    }

    protected function systems(): void
    {
        $this->endpoint = 'systems';
    }

    protected function systemJumps(): void
    {
        $this->endpoint = 'system_jumps';
    }

    protected function systemKills(): void
    {
        $this->endpoint = 'system_kills';
    }

    protected function types(): void
    {
        $this->endpoint = 'types';
    }

    protected function type(int $typeId): void
    {
        $this->endpoint = 'types/' . $typeId;
    }
}
