<!-- Création de la classe Orc héritant de Character. -->
<!-- Attributs: damage -->

<?php
class Orc extends Character {
    // Attributes
    /**
     * Create a variable to store inflicted damage.
     * 
     * @var int $damage
     */
    private $damage;

    //Functions
    /**
     * Set the orc attack
     * 
     * @return self
     */
    public function attack() {
        $this->damage = rand(600, 800);
    }
    /**
     * Get the value of damage
     * 
     * @return int
     */ 
    public function getDamage(): int {
        return $this->damage;
    }
    /**
     * Set the value of damage
     * 
     * @param int
     * @return  self
     */ 
    public function setDamage(int $damage): self {
        $this->damage = $damage;
        return $this;
    }
    /**
     * Settings to hit the Orc
     * 
     * @param int $get_weaponDamage
     * @param int 
     * @return int $health
     */
    public function gets_hit(int $get_weaponDamage) {
        $this->set_health($this->get_health() - $get_weaponDamage);
        return $this->get_health();
    }

    public function __construct(int $health, int $rage, int $damage) {
        parent::__construct($health, $rage);
        $this->damage = $damage;
    }
}