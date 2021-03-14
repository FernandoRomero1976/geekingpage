<?php

require_once ("config.php");

$stmt = $conn->prepare("SELECT * FROM tb_nerds ORDER BY idnerd ");

$stmt->execute();

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC); 

//var_dump ($resultados);

foreach($resultados as $row) {

    foreach ($row as $key => $value ){
        echo "<strong> $key.</strong>"." " . $value. "<br>";
        
    }

    echo "==========================". "<br>";
}



?> 