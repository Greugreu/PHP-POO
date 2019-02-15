<?php

class Coupe extends Voiture
{
    use Paresoleil;

    public $portes = "2";

    public function setMessage($msg)
    {
        $this->message = $msg;
    }
}