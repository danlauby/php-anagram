<?php
    class Anagram
    {
        public $word;
        public $multiple_words;

        function __construct($new_word, $new_multiple_words)
        {
            $this->word = $new_word;
            $this->multiple_words = $new_multiple_words;
        }

        static function getAll()
           {
               return $_SESSION['list_of_words'];
           }

           function save()
   {
       array_push($_SESSION['list_of_words'], $this);
   }

        function checkMultWords($new_word, $new_multiple_words)
        {
            $sep_words = explode(" ", $new_multiple_words);
            $anagramAnswer = [];
            for ($i=0; $i<count($sep_words); $i++) {
	            if (count_chars(strtoupper($new_word), 1) == count_chars(strtoupper($sep_words[$i]), 1))
		        {
		        array_push($anagramAnswer, $sep_words[$i] . ": ANAGRAM");
		        } else {
		        array_push($anagramAnswer, $sep_words[$i] . ": Not an anagram");
		    }
           };
            return implode(" ", $anagramAnswer);
        }

    }


?>
