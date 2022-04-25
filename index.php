
<?php

require_once 'Car.php';

$twingo = new Car('red', 4, 'low');

try {
    $twingo->start();
} catch(Exception $e){
    $twingo->changeParkBrake();
 } finally{
    echo $twingo->start();
}

echo $twingo->forward();
echo $twingo->brake() . '<br>';


?>