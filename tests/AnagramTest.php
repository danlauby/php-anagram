<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_checkWord()
        {
            //Arrange
            $test_newWord = new Anagram;
            $inputOne = "hello";
            $inputTwo = "olleh";

            //Act
            $result = $test_newWord->checkWord($inputOne, $inputTwo);

            //Assert
            $this->assertEquals(1, $result);

        }

        function test_checkCapitalized()
        {
            //Arrange
            $test_newlower = new Anagram;
            $inputOne = "hello";

            //Act
            $result = $test_newlower->checkCapitalized($inputOne);

            //Assert
            $this->assertEquals("HELLO", $result);
        }
    }



?>
