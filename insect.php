<?php



// Insect class inheriting from Entity
class Insect extends Entity {
    public function fly() {
        return "The {$this->species} has {$this->size} cm and it is flying.";
    }

    public function eat($food) {
        return "The {$this->species} is eating {$food}.";
    }
}

?>