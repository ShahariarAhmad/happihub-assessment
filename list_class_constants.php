<?php

class Report
{
    const RESPONSE = 15;
    const REQUEST = 20;
    const UID = 06;
    

    function getConstants()
    {
        $class = new ReflectionClass($this);
        return $class->getConstants();
    }
}


function GenerateReport($class)
{


    if (is_object($class)) {
        echo "Getting class constants using object as parameter ... <br><br>";
        print_r($class->getConstants());
    }


    if (is_string($class)) {
        echo "Getting class constants using 'Class name' as parameter ... <br><br>";
        $data = new $class;
        print_r($data->getConstants());

    }

    if (!is_string($class) & !is_object($class)) {
        echo "Note: Only Class Object and Class name as a string can be used as a function parameter.";
    }
}






// :::::::::::: TEST GROUND :::::::::::::


 

echo "<pre>";
GenerateReport(new Report);
echo "<br> <br> <br> <br> <br> <br><br>";
GenerateReport('Report');
echo "<br> <br> <br> <br> <br> <br><br>";
GenerateReport(1);

?>