<?php
private $cod;
private $name;
private $description;
private $imgPath;
private $link;
class product{
    function __construct($cod, $name, $description, $imgPath, $link){
        $this->cod = $cod;
        $this->name = $name;
        $this->description = $description;
        $this->imgPath = $imgPath;
        $this->link = $link;
    }

    function addProduct(){

    }
    function deleteProduct(){

    }

    function setCod($cod){
        $this->cod = $cod;
    }
    function getCod(){
        return $this->cod;
    }
    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
    function setDescription($description){
        $this->description = $description;
    }
    function getDescription(){
        return $this->description;
    }
    function setImgPath($imgPath){
        $this->imgPath = $imgPath;
    }
    function getImgPath(){
        return $this->imgPath;
    }
    function setLink($link){
        $this->link = $link;
    }
    function getDescription(){
        return $this->link;
    }
}
?>