<?php

include 'Kernel.php';
include 'OpenWeatherApi.php';
include 'Wordpress.php';
include 'Merge.php';

$merge = new Merge;
var_dump($merge->openWeatherApi()->currentWeatherByCityName("bratislava","sk"));
