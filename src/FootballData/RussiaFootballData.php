<?php

namespace FootballData;

class RussiaFootballData implements FootballDataInterface
{
    protected $champions = [
        '2015' => 'Зенит',
        '2016' => 'ЦСКА',
        '2017' => 'Спартак',
        '2018' => 'Локомотив',
        '2019' => 'Зенит',
    ];

    public function getChampion($year): string
    {
        return 'Чемпион России по футболу ' . $year . ': ' .$this->champions[$year];
    }
}