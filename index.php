<?php
  require_once 'Dipendente.php';
  require_once 'Persona.php';

  $persona_1 = new Persona ('Veronica', 'Praino', '1988-03-14', 'Italia');
  $persona_1->setName('Veronica');
  $persona_1->setSurname('Praino');
  $persona_1->setDateOfBirth('1988-03-14');
  $persona_1->setBirthPlace('Italia');

  $dipendente_1 = new Dipendente ('H21ZD4', '1500', 'Impiegata', 'Tempo determinato');
  //$dipendente_1->setCodeId('H21ZD4');.....(non funziona con il set)

  echo '<pre>';
  print_r($dipendente_1);
  echo '</pre>';
  print_r($persona_1);
  echo '</pre>';
?>
