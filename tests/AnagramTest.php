<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_checkWord()
        {
            //Arrange
            $test_newWord = new Anagram;
            $input_one = "hello";
            $input_two = "olleh";

            //Act
            $result = $test_newWord->checkWord($input_one, $input_two);

            //Assert
            $this->assertEquals(1, $result);

        }

        function test_checkCapitalized()
        {
            //Arrange
            $test_newlower = new Anagram;
            $input_one = "hello";

            //Act
            $result = $test_newlower->checkCapitalized($input_one);

            //Assert
            $this->assertEquals("HELLO", $result);
        }

        function test_multWords()
        {
            // Arrange
            $test_multiWord = new Anagram;
            $input_one = "eholl";
            $input_words = "hello whale sunshine";

            // Act
            $result = $test_multiWord->checkMultWords($input_one, $input_words);

            // Assert
            $this->assertEquals(1, $result);
        }
    }



?>
