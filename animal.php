<?php

include 'entity.php';

class Animal extends Entity {
    private $habitat;

    public function __construct($species,  $size, $habitat) {
        parent::__construct($species, $size);
        $this->habitat = $habitat;
    }

    public function getHabitat() {
        return $this->habitat;
    }

    public function setHabitat($habitat) {
        $this->habitat = $habitat;
    }

    public function move() {
        return "The {$this->species} has {$this->species} metter is moving in its {$this->habitat} habitat.";
    }

    public function eat($food) {
        return "The {$this->species} is eating {$food}.";
    }
}

?>