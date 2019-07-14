<?php

namespace FootballData;

interface FootballDataInterface
{
    public function getChampion($year): string;
}