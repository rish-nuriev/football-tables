<?php

namespace FootballData;

class SpainFootballData implements FootballDataInterface
{
    protected $champions = [
        '2015' => 'Barcelona',
        '2016' => 'Barcelona',
        '2017' => 'Real',
        '2018' => 'Barcelona',
        '2019' => 'Barcelona',
    ];

    public function getChampion($year): string
    {
        return 'Campeón de Inglaterra en fútbol ' . $year . ': ' . $this->champions[$year];
    }
}