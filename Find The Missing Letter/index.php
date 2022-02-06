<?php
class Solution
{
    public $caracter = "";
    public $letters = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

    function getMissingCaracter($string)
    {
        $keys = (int)array_keys($this->letters, $string[0]);

        for ($i = $keys - 1; $i < strlen($string); $i++) {
            if ($this->letters[$i] != $string[$i]) {
                $this->caracter = $this->letters[$i];
            }
        }
        if (!$this->caracter) {
            echo 'no missing caracter';
            exit();
        }

        return $this->caracter;
    }
}

$s = new Solution();

echo ($s->getMissingCaracter('agc'));
