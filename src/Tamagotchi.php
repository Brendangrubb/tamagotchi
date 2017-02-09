<?php
class Tamagotchi
{
    private $food;
    private $attention;
    private $rest;

    function __construct($food, $attention, $rest)
    {
        $this->food = $food;
        $this->attention = $attention;
        $this->rest = $rest;
    }

    function setFood($new_food)
    {
        $this->food = $new_food;
    }

    function setAttention($new_attention)
    {
        $this->attention = $new_attention;
    }

    function setRest($new_rest)
    {
        $this->rest = $new_rest;
    }

    function getFood()
    {
        return $this->food;
    }

    function getAttention()
    {
        return $this->attention;
    }

    function getRest()
    {
        return $this->rest;
    }

}
?>
