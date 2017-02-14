# _Anagram Checker_

#### Enter a word and list of potential anagrams to check for matches.

#### By Jennifer Beem  & Dan Lauby

## Description

This program checks an entered word and list for matching anagrams.

## _Application Specifications_

| Behavior | Input | Output |
|----------|-------|--------|
| User can input a word and potential anagram and program will check if potential anagram matches inputted-word | "hello", "olleh"  | True (1) |
| Program makes converts all inputted word to uppercase  | "hello"| "HELLO" |
| User can input list containing multiple words to compare more than one potential anagram | "hello", ("olleh" "loleh" "lleoh")| "true" (1), "true" (1), "true" (1) |
## Setup/Installation Requirements

* Clone this repository
* Run "composer install" in computer terminal
* Navigate into this project's "web" folder
* Run "php -S localhost:8000" in terminal to setup document root
* Open up web browser and navigate to the url "localhost:8000" to view functional program

## Known Bugs

None known.

## Support and contact details

Feel free to contact [Jennifer] (jenniferbeem@gmail.com) & [Dan] (dmlauby@gmail.com) if any questions come up!

## Technologies Used

* PHP/Silex
* PHPUnit for testing
* HTML/Twig
* CSS/Bootstrap

### License

Copyright (c) 2017 Jennifer Beem & Dan Lauby
