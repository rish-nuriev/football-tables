<?php

namespace FootballData;

class SpainFootballDataCreator extends FootballDataCreator
{
    public function createFootballData(): FootballDataInterface
    {
        return new SpainFootballData();
    }
}