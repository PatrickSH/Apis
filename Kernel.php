<?php

class Kernel
{
    protected $info;
    protected $params;
    protected $url;

    public function __construct()
    {
        $this->info = $info;
        $this->params = $params;
        $this->url = $url;
    }

    protected function execute()
    {
        $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $this->url."?".http_build_query(array_merge($this->params,$this->info)));
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    curl_setopt($ch, CURLOPT_POST, false);
        if(isset($this->info['oauth']) && $this->info['oauth']){
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array_merge($this->params,$this->info)));
        }
	    $result = json_decode(curl_exec($ch), true);
        var_dump($result);die;
        return $result;
    }
}