<?php

//<!------ Ребят задачка интересная - особенно если брать реальные расстояния между планетами. Поэтому надеюсь что его сделаете сами. Будет как домашка. - ---->
//<!---->
//<!--Создать объект космический корабль-->
//<!--Приватные свойства-->
//<!--- Название (string)-->
//<!--- скорость(int)  в кл/c - километро в секунду-->
//<!--- маршрут (объект Planet)-->
//<!---->
//<!--Публичные методы (можно все через конструктор установить):-->
//<!--- Установить скорость вашего космического судна-->
//<!--- Установить название-->
//<!--- Установить маршрут (принимает в себя объект Planet)-->
//<!--- Получить время в годах наверное или в днях,  за которое ваш корабль достигнет планету (надо учитывать скорость)-->


interface Planet
{
    public function getDistinationKillomenters();
}

class Mars implements Planet
{
    //Расстояние до земли
    public int $distinationKillomenters;

    public function getDistinationKillomenters()
    {
        return $this->distinationKillomenters;
    }


    public function __construct($distinationKillomenters)
    {
        $this->distinationKillomenters = $distinationKillomenters;
    }
}

class Spaceship
{
    private string $name;
    private int $speed;
    private Planet $distination;


    public function __construct(string $name, int $speed, Planet $distination)
    {
        $this->name = $name;
        $this->speed = $speed;
        $this->distination = $distination;
    }


    public function timeToEarth()
    {
        return $this->distination->getDistinationKillomenters() / $this->speed / 60 / 24 / 365;
    }
}

$spaceship = new Spaceship("Star", 64500, new Mars('56000000'));

echo $spaceship->timeToEarth();