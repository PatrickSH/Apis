<?php

class Wordpress extends Kernel
{
    public function __construct()
    {
        $this->info = [];
        $this->url = "http://localhost/wpplugins/wp-json/wp/v2/";
    }

    public function getAllUsers()
    {
        $this->params = [];
        $this->url = $this->url."users";
        $this->execute();
    }

    public function getAllPosts()
    {
        $this->params = [];
        $this->url = $this->url."posts";
        $this->execute();
    }

}