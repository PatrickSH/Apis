<?php
/**
*@TODO Add options for future
*/
class OpenWeatherApi extends Kernel
{
    public function __construct()
    {
        $this->info = 
        [
            'APPID' => '0ecda8eac0bfc2be4d011682ae0be019',
            'oauth' => false
        ];
        $this->url = "http://api.openweathermap.org/data/2.5/";
    }

    /**
    *@param $zip : int : Zip code of target
    *@param $country : string : Country target default to US
    *@return json
    */
    public function currentWeatherByZip( $zip, $country = null )
    {
        $zip = (!is_null($country)) ? $zip.",".$country : $zip;
        $this->params = ['zip' => $zip];
        $this->url = $this->url."weather";
        $this->execute();
    }

    /**
    *@param $name : string : city name of target
    *@param $country : string : Country target default to US
    *@return json
    */
    public function currentWeatherByCityName( $name, $country = null )
    {
        $zip = (!is_null($country)) ? $name.",".$country : $name;
        $this->params = ['q' => $name];
        $this->url = $this->url."weather";
        $this->execute();
    }

    /**
    *@param $id : int : city id
    *@return json
    */
    public function currentWeatherByCityId( $id )
    {
        $this->params = ['id' => $id];
        $this->url = $this->url."weather";
        $this->execute();
    }

    /**
    *@param $lat : int : target lat
    *@param $lon : int : target lon
    *@return json
    */
    public function currentWeatherByLatLon( $lat, $lon )
    {
        $this->params = ['lat' => $lat, 'lon' => $lon];
        $this->url = $this->url."weather";
        $this->execute();
    }
}