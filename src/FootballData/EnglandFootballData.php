<?php

namespace FootballData;

class EnglandFootballData implements FootballDataInterface
{
    protected $champions = [
        '2015' => 'Chelsea',
        '2016' => 'Lester',
        '2017' => 'Chelsea',
        '2018' => 'Manchester City',
        '2019' => 'Manchester City',
    ];

    public function getChampion($year): string
    {
        return 'England champion in football ' . $year . ': ' . $this->champions[$year];
    }
}