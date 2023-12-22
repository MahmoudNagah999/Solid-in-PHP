<?php

namespace Classes;

class matchClass
{
    private $att;
    private $def;
    private $keep;

    public function __construct()
    {
        $this->att = new attack();
        $this->def = new defence();
        $this->keep = new keeper();       
    }

    public function start(){
        return "start match";
    }
    

}