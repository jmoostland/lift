
<?php

$naamverdieping = array ("receptie","horeca","vergaderruimte","kantoren");
$nummer = array ("1","2","3","4");
    
        for($lift = 0;$lift < count($naamverdieping);$lift++){
          echo "<br>";
          echo $nummer[$lift];
          echo $naamverdieping [$lift];
        }

?>