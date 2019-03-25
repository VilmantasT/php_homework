<?php
declare(strict_types=1);

namespace Nfq\Akademija\Strict{

    function wrapper(){

        function calculateHomeWorkSum(int ...$numbers): int{
            echo "function reached";
            $sum = 0;

            foreach ($numbers as $n) {
                echo $n;
                $sum += $n;

            }
            echo __FUNCTION__  . ": ";
            return $sum;
        }

        return calculateHomeWorkSum(3, 2.2, '1');


    }

}



 ?>
