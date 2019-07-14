<?php

namespace FootballData;

class RussiaFootballDataCreator extends FootballDataCreator
{
    public function createFootballData(): FootballDataInterface
    {
        return new RussiaFootballData();
    }
}