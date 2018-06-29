<html>
        <head>

        </head>
    <body>
<?php

$Würfel1 = array("1", "2", "3", "4", "5", "6");

shuffle($Würfel1);
/* echo "Die gewürfelte Zahl von Würfel 1 ist $Würfel1[0]. "; */

$Würfel2 = array("1", "2", "3", "4", "5", "6");
shuffle($Würfel2);
/* echo "Die gefürfelte Zahl von Würfel 2 ist $Würfel2[0]. "; */

$Würfel3 = $Würfel1[0]+$Würfel2[0];

echo "Die insgesamt gewürfelte Zahl ist  $Würfel3 ";
?>
    </body>
</html>
