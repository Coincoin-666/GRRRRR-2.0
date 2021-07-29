<?php
/**
 * Create the general class Character
 * Will be linked to all subclasses.
 * 
 * @var int
 * @var int
 * @var string $weapon  (espadon, that's a fish.)
 *  @var int $weaponDamage   (between 400 and 600)
 * @var string $shield  (plaques)
 * @var int $shieldValue    (between 800 and 1500)
 */
class Character {
    /**
     * General Properties
     */
    private $health;
    private $rage;
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    /**
     * Get the value of health
     * Will be different for each character
     * 
     * @return int
     */
    public function get_health(): int {
        return $this->health;
    }

    /**
     * Set the value of health
     * 
     * @param int $health
     * @return self
     */
    public function set_health(int $health): self {
        $this->health = $health;
        return $this;
    }

    /**
     * Get the value of rage
     * Will be set up depending on the character
     * 
     * @return int
     */
    public function get_rage(): int {
        return $this->rage;
    }

    /**
     * Set the value of rage
     * 
     * @param int $rage
     * @return self
     */
    public function set_rage(int $rage): self {
        $this->rage = $rage;
        return $this;
    }

    /**
     * Get the value of weapon
     * (name)
     * 
     * @return string
     */ 
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * Set the value of weapon
     * (name)
     *
     * @param string
     * @return  self
     */ 
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
        return $this;
    }

    /**
     * Get the value of weaponDamage
     * 
     * @return int
     */ 
    public function getWeaponDamage()
    {
        return $this->weaponDamage;
    }

    /**
     * Set the value of weaponDamage
     *
     * @param int
     * @return  self
     */ 
    public function setWeaponDamage($weaponDamage)
    {
        $this->weaponDamage = $weaponDamage;

        return $this;
    }

    /**
     * Get the value of shield
     * (name)
     * 
     * @return string
     */ 
    public function getShield()
    {
        return $this->shield;
    }

    /**
     * Set the value of shield
     * (name)
     *
     * @param string
     * @return  self
     */ 
    public function setShield($shield)
    {
        $this->shield = $shield;

        return $this;
    }

    /**
     * Get the value of shieldValue
     * 
     * @return int
     */ 
    public function getShieldValue()
    {
        return $this->shieldValue;
    }

    /**
     * Set the value of shieldValue
     *
     * @param int
     * @return  self
     */ 
    public function setShieldValue($shieldValue)
    {
        $this->shieldValue = $shieldValue;

        return $this;
    }
}