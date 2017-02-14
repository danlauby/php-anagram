<?php
    class Anagram
    {
            function checkWord($input_one, $input_two)
            {
                return(count_chars($input_one, 1) == count_chars($input_two, 1));
            }

            function checkCapitalized($input_one)
            {
                return(strtoupper($input_one));
            }

            // function checkMultWords($input_one, $input_words)
            // {
            //     $sep_words = explode(" ", $input_words);
            //     foreach ($sep_words as $word) {
		    //               return(count_chars($input_one, 1) == count_chars($word, 1));
	        //     }
            //
            // }

            function checkMultWords($input_one, $input_words)
            {
                $sep_words = explode(" ", $input_words);
                $anagramAnswer = [];
	            for ($i=0; $i<count($sep_words); $i++) {
		            if (count_chars($input_one, 1) == count_chars($sep_words[$i], 1))
			        {
			        array_push($anagramAnswer, "MATCH");
			        } else {
			        array_push($anagramAnswer, "NOPE");
			    }
	           };
	            return implode(" ", $anagramAnswer);
            }

    }


?>
