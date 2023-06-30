<?php 
    $paragraph = $_GET['paragraph'];
    $censure = $_GET['censure'];
    $paragraphCensure = str_replace($censure, '***', $paragraph);

    echo "La Frase è: " .$paragraph. " " ."Lunga: " .strlen($paragraph). "<br>";
    echo "La Parola censurata è: " .$censure. "<br>";
    echo "La Frase con la parola censurata è: " .$paragraphCensure. " " ."Lunga: " .strlen($paragraphCensure);

?>