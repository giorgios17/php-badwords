<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php 

$text = '<p>Primo esercizio PHP.</p>';
$textLength =  strlen($text);
echo ($text . ' Lunghezza stringa: ' . $textLength);
$word = $_GET["input"];
echo $word;

?>
