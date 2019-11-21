<?php
$line = readline("Van welk getal wil je de faculteit weten?");
$tot=1.0;
for($i = 1; $i <= $line; $i++){
 $tot*=$i;
}
echo $tot;
?>