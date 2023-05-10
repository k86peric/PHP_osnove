<?php

include 'vendor/autoload.php';

use App\Math\Geometry\Circle;
use App\Math\Geometry\Exception\RadiusException;

try{
try {
    $geometryCircle = new Circle(10);
} catch (RadiusException | TypeError) {
    echo "Radius must be a number greater than 0\n";
    return;
}
catch (\Throwable $th) {
    echo "Exception happened while instancing a circle\n";
    throw $th;
}
return;
    
}catch (\Throwable $th) {
    echo "Error!\n";
    return;
}
finally {
    echo "Finally!\n";
}

var_dump($geometryCircle->getExtent());