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
    }



?>
