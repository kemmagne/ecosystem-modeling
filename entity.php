<?php

// Base class for all entities in the ecosystem
class Entity {
    protected $species;

    protected $size;

    public function __construct($species, $size) {
        $this->species = $species;
        $this->size = $size;
    }


    public function getSpecies() {
        return $this->species;
    }

    public function setSpecies($species) {
        $this->species = $species;
    }


    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
    }
}

?>