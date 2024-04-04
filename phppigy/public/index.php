<?php

// phpinfo();//  gives information about loacally installed version of php

// ini_set('memory_limit','255M');//This function is used to modify the ini file

// echo ini_get('memory_limit');//initially it gives momory size of 512M
//after set limit it gives 255M memory size

include __DIR__ ."/../src/App/function.php";

$app = include __DIR__ ."/../src/App/bootstrap.php";

$app->run();



?>
