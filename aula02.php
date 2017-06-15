<?php


class People
{
    public function getHello($name)
    {
        return "Olá {$name}!";
    }
}


$p = new People();
echo $p->getHello("Lucas");

