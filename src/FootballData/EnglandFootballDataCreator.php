<?php

namespace FootballData;

class EnglandFootballDataCreator extends FootballDataCreator
{
    public function createFootballData(): FootballDataInterface
    {
        return new EnglandFootballData();
    }
}