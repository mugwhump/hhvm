<?php
<<<<<<< HEAD
//Tests that calling is_callable() on an illegal array just returns false, 
=======
//Tests that calling is_callable() on an illegal array just returns false,
>>>>>>> 9c414b9a4a89a7490aae5f2876b4a69e2aa6ea70
//without an array->string conversion notice

function myErrorHandler($errno, $errstr, $errfile, $errline)
{
<<<<<<< HEAD
    //if ($errno == E_USER_NOTICE)
        echo "Notice: $errstr\n";
}

$old_error_handler = set_error_handler("myErrorHandler");
//error_reporting(0);
var_dump( is_callable( array(1,2,3), true, $name ) );
echo $name . "\n";
//set_error_handler($old_error_handler);
=======
        echo "Notice: $errstr\n";
}

set_error_handler("myErrorHandler");
var_dump( is_callable( array(1,2,3), true, $name ) );
echo $name . "\n";
>>>>>>> 9c414b9a4a89a7490aae5f2876b4a69e2aa6ea70
?>
