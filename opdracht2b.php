<?php

$dag = date("j F Y");

echo "het is vandaag: $dag</br>";

$jaar = date ("Y");

$getal = date ("L");

$dagvanhetjaar = date("z");

echo "vandaag is het $dagvanhetjaar de dag van de jaar</br>";

$dagvanweek = date ("w");
echo "vandaag is het $dagvanweek de dag van de week</br>";

$dagmaand =date("t");
echo "november heeft $dagmaand dagen</br>";


if($getal == 1)
{
    echo "het $jaar is een schrikeljaar.";
}
else
{
    echo "$jaar is geen schrikeljaar.";
}

?>