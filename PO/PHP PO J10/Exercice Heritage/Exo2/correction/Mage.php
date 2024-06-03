<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

require_once "Character.php";

class Mage extends Character {
    private int $mana;

    public function __construct() {

    }

    public function getMana(): int
    {
        return $this->mana;
    }

    public function setMana(int $mana): void
    {
        $this->mana = $mana;
    }

    public function introduce(): string
    {
        return parent::introduce();
    }

    public function fullIntroduction() : string
    {
        return $this->introduce() . " j'ai {$this->life} points de vie et {$this->mana} points de mana.";
    }
}

