<?php

class Merge
{
    public function openWeatherApi()
    {
        return new OpenWeatherApi;
    }

    public function wordpressApi()
    {
        return new Wordpress;
    }
}