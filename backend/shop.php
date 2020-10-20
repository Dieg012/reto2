<?php
private $shopCod;
private $location;
private $schedule;
private $info;
private $productos; //Array

class shop{
    function __construct($shopCod, $location, $schedule, $info, $productos){
        $this->shopCod = $shopCod;
        $this->location = $location;
        $this->schedule = $schedule;
        $this->info = $info;
        $this->productos = $productos;
    }
    function setShopCod($shopCod){
        $this->shopCod = $shopCod;
    }
    function getShopCode(){
        return $this->shopCod;
    }

    function setLocation($location){
        $this->location = $location;
    }
    function getLocation(){
        return $this->location;
    }

    function setSchedule($schedule){
        $this->schedule = $schedule;
    }
    function getSchedule(){
        return $this->schedule;
    }

    function setInfo($info){
        $this->info = $info;
    }
    function getInfo(){
        return $this->info;
    }

    function setProductos($productos){
        $this->productos = $productos;
    }
    function getCod(){
        return $this->productos;
    }
}
?>