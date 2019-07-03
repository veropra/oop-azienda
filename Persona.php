<?php
  class Persona {
    public $name;
    public $surname;
    public $dateofbirth;
    public $birthplace;

    public function setName($_name) {
      $this->name = $_name;
    }
    public function setSurname($_surname) {
      $this->surname = $_surname;
    }
    public function setDateOfBirth($_dateofbirth) {
      $this->dateofbirth = $_dateofbirth;
    }
    public function setBirthPlace($_birthplace){
      $this->birthplace = $_birthplace;
    }
  }
?>
