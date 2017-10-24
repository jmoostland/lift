
<?php

$naamverdieping = array ("receptie","horeca","vergaderruimte","kantoren");
$nummer = array ("1","2","3","4");
    
        for($lift = 0;$lift < count($naamverdieping);$lift++){
          echo "<br>";
          echo $nummer[$lift];
          echo $naamverdieping [$lift];
          
        }
          echo "<br>";
?>

<?php
    echo "<br>";
    echo "<b> Gebouw 4 </b>";
    echo "<br>";
    echo "<br>";
    
$naamverdiepingen = array("1 receptie","2 horeca", "3 vergaderruimte", "4 kantoren.");
$arrlenght = count ($naamverdiepingen);

    echo "Dit gebouw bestaat uit de volgende verdiepingen:";
    echo "<br>";
        for($x = 0;$x < $arrlenght; $x++){  
            echo $naamverdiepingen[$x];
            echo "<br>";
        }
?>

