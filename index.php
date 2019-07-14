<?php

use FootballData\{RussiaFootballDataCreator, EnglandFootballDataCreator, SpainFootballDataCreator};

require_once 'vendor/autoload.php';

$footballData = new SpainFootballDataCreator();

$footballData->showChampion('2017');

