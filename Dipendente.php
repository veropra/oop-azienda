<?php
  require_once 'Persona.php';

  class Dipendente extends Persona {
    protected $codeid;
    protected $monthlysalary;
    protected $typeofcontract;
    public $framing;
    public function __construct($_codeid, $_monthlysalary, $_framing, $_typeofcontract) {
      $this->codeid = $_codeid;
      $this->monthlysalary = $_monthlysalary;
      $this->typeofcontract = $_typeofcontract;
      $this->framing = $_framing;
    }
  }
?>
