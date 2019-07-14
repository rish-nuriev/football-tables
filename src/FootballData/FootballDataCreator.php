<?php

namespace FootballData;

abstract class FootballDataCreator
{
    abstract public function createFootballData(): FootballDataInterface;

    public function showChampion($year)
    {
        $data = $this->createFootballData();

        echo $data->getChampion($year);
    }
}