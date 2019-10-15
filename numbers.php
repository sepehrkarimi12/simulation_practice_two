<?php
function getOneToOneThousand($number)
{
    $result = null;
    switch ($number)
    {
        case ($number>=1 and $number<=125):
            $result=1;
            break;
        case ($number>=126 and $number<=250):
            $result=2;
            break;
        case ($number>=251 and $number<=375):
            $result=3;
            break;
        case ($number>=376 and $number<=500):
            $result=4;
            break;
        case ($number>=501 and $number<=625):
            $result=5;
            break;
        case ($number>=626 and $number<=750):
            $result=6;
            break;
        case ($number>=751 and $number<=875):
            $result=7;
            break;
        case ($number>=876 and $number<=1000):
            $result=8;
            break;
    }
    return $result;
}

function getOneToOneHundred($number)
{
    $result=null;
    switch ($number)
    {
        case ($number>=1 and $number<=10):
            $result=1;
            break;
        case ($number>=1 and $number<=30):
            $result=2;
            break;
        case ($number>=31 and $number<=60):
            $result=3;
            break;
        case ($number>=61 and $number<=85):
            $result=4;
            break;
        case ($number>=86 and $number<=95):
            $result=5;
            break;
        case ($number>=96 and $number<=100):
            $result=6;
            break;
    }
    return $result;
}
?>
