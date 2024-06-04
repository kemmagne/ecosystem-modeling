<?php


class Plant {
    public $species;

    public function __construct($species) {
        $this->species = $species;
    }

    public function grow() {
        return "The {$this->species} is growing.";
    }

    public function photosynthesis() {
        return "The {$this->species} is undergoing photosynthesis.";
    }
}

?>