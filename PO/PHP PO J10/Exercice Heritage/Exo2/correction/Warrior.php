<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

require_once "Character.php";

class Warrior extends Character {
    private int $energy;

    public function __construct() {

    }

    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }

    public function introduce(): string
    {
        return parent::introduce();
    }

    public function fullIntroduction() : string
    {
        return $this->introduce() . " j'ai {$this->life} points de vie et {$this->energy} points d'énergie.";
    }
}

