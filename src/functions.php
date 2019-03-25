<?php

namespace{
    function calculateHomeWorkSum(...$numbers){
        $sum = 0;

        foreach ($numbers as $n) {
            $sum += $n;
        }
        return __FUNCTION__ . ": " . $sum;
    }
}

namespace Nfq\Akademija\Not_Typed{
    function calculateHomeWorkSum(...$numbers): int {
        $sum = 0;

        foreach ($numbers as $n) {
            $sum += $n;
        }
        echo __FUNCTION__ . ": ";
        return $sum;
    }
}
namespace Nfq\Akademija\Soft{
    function calculateHomeWorkSum(int ...$numbers): int {
        $sum = 0;

        foreach ($numbers as $n) {
            $sum += $n;
        }
        echo __FUNCTION__ . ": ";
        return $sum;
    }
}



 ?>
