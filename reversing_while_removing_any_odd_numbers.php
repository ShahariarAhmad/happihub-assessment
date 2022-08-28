<?php
echo "<pre>";
$num = [1, 10, 13, 2, 4, 5, 8, 7, 11];



function findEven($arr)
{

    $flag = 0;
  
    for ($i = 0; $i < count($arr); $i++) {


        if ($arr[$i] % 2 !== 0) {

            echo " <br> Odd number " . $arr[$i] . ' removed <br><br><br><br>';
            unset($arr[$i]);
            $newarr = array_reverse($arr);
            print_r($refreshed = array_values($newarr));
            echo  ' **************************<br><br>';

            foreach ($arr as $v) {
                if ($v % 2 !== 0)
                    $flag += 1;
            }
            if ($flag !== 0) {

                return findEven($refreshed);
            }
        }
    }
}


findEven($num);

?>