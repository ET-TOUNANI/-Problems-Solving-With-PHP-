<?php
$string = ' hello world i am abderrahmane ettounani';

class solution
{
    public

    function longestString($string)
    {
        // conver string to array 
        $array = explode(" ", trim($string));

        $max = [strlen($array[0]), 0];

        for ($i = 0; $i < count($array); $i++)
            if ($max[0] < strlen($array[$i])) {
                $max[0] = strlen($array[$i]);
                $max[1] = $i;
            }
        return $array[$max[1]];
    }
}

$sol = new solution();

$res = $sol->longestString($string);

echo ($res);
