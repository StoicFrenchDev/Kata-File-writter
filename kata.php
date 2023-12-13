<?php

/**
 * Faire un programme qui écrit dans un fichier nommé "mantra.txt".
 * Il devra écrire dans ce fichier "PHP est le meilleur langage du monde!!" sur une ligne 10000 fois.
 */
$handler = fopen('mantra.txt', 'w');

for ($i=0; $i < 10000; $i++) { 
   fwrite($handler, 'PHP est le meilleur langage du monde!!' . PHP_EOL);
}

fclose($handler);