<?php
    class Anagram
    {
            function checkWord($inputOne, $inputTwo)
            {
                return(count_chars($inputOne, 1) == count_chars($inputTwo, 1));
            }

            function checkCapitalized($inputOne)
            {
                return(strtoupper($inputOne));
            }
    }


?>
