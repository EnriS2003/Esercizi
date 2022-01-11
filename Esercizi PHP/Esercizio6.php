<?php
$salary[]=2000;
$salary[]=3000;
$salary[]=5000;

foreach($salary as $valore){
  echo "Salary: $valore<br>";
}

$scuola = array(
  'preside' => array('Alessandro Janui'),
  'insegnanti' => array('Ramona Ruetti','Giancalro Flora','Roberto Lima'),
  'studente' => array('Francesco Pala','Tommaso Dendis','Enrico LaGrotta')
);
echo "<br>";
// Ora eseguo un ciclo per scorrere gli elementi dell'array
foreach ($scuola as $ruolo => $nomi) {
  foreach ($nomi as $nome) {
    echo $ruolo . ' - ' . $nome . '<br>';
  } 
}
echo "<br>";
print_r ($scuola);

?>
