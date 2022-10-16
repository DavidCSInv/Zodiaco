<?php
$xml = simplexml_load_file('signos.xlm');

foreach($xml as $signo){

echo "Data Inicio" . $signo->dataInicio . "<br>",
echo "Data Fim" . $signo->dataFim . "<br>",
echo "Signo" . $signo->signoNome . "<br>",
echo "Personalidade" . $signo->descricao . "<br>";
echo "<hr>";
}

?>
