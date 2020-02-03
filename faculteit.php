<?php
echo("Van welk getal wil je de faculteit weten?".PHP_EOL);
$num = readline();
$out = 1;
for($i = 1;$i < $num;$i++){
    $out += $out * $i;
}
echo($out);

?>