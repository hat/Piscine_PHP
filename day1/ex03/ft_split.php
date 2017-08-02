<?php
function ft_split($arg_1)
{
    $arr_1 = preg_split('/\s+/', $arg_1);
    sort($arr_1);
    return $arr_1;
}
?>