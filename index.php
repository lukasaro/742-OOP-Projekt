<html>
<head>
<meta charset = "utf=8">
</head>

<?php

require("kontakt.php");

class kunde extends kontakt
{
    public $Kundennr;
}

$kunde = new kunde();
$kunde->Name = "Jonas";
$kunde->Adresse = "Zuhause";
$kunde->Email = "info@home.de";
$kunde->Kundennr = "10";

echo "$kunde->Name $kunde->Adresse $kunde->Email $kunde->Kundennr"

?>


