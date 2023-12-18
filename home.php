<?php

require_once 'partials/header.php';

?>

<?php
    $data = "fichier.txt";
    $dataTab = file($data);
    echo "<div class='container'>";
        for ($i=0; $i < count($dataTab); $i++) { 
           if($i === 0){
             echo "<div class='livre'>";
           }
           if($dataTab[$i] == " \n" && $i < count($dataTab) -1){
               echo "</div>";   
               echo "<div class='livre'>";
           }else{
                echo "<p>" . $dataTab[$i] . "</p>";
           }
           if ($i === count($dataTab)) {
                echo "</div>";
           }
        }
    echo "</div>";
    echo "</div>";
?>


<?php
include 'partials/footer.php';
?>