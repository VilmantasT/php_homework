<?php

    require_once "vendor/autoload.php";

    use Nfq\Akademija\Not_Typed as NT;
    use Nfq\Akademija\Soft as Soft;
    use Nfq\Akademija\Strict as Strict;

    echo calculateHomeWorkSum(3, 2.2, '1') . "<br>";
    echo NT\calculateHomeWorkSum(3, 2.2, '1') . "<br>";
    echo Soft\calculateHomeWorkSum(3, 2.2, '1') . "<br>";
    // echo Strict\wrapper();
    echo Strict\wrapper(3, 2.2, '1');

 ?>
