
<?php 

//Add several strings together
SELECT CONCAT("SQL ", "Tutorial ", "is ", "fun!") AS ConcatenatedString; 
//ans: SQL Tutorial is fun!

//Add several expressions together, and add a "-" separator between them:
SELECT CONCAT_WS("-", "SQL", "Tutorial", "is", "fun!") AS ConcatenatedString;
//Ans : SQL-Tutorial-is-fun!

//Return the index position of  "q" in the string list:
SELECT FIELD("q", "s", "q", "l");
//Ans: FIELD("q", "s", "q", "l") => 2

// Search for "q" within the list of strings:
SELECT FIND_IN_SET("q", "s,q,l");
//Ans : FIND_IN_SET("q", "s,q,l") => 2

// Format the number as "#,###,###.##" (and round with two decimal places):
SELECT FORMAT(250500.5634, 2);
//Ans: 250,500.56

// Insert the string "Example" into the string "W3Schools.com". Replace the first nine characters:
SELECT INSERT("W3Schools.com", 1, 9, "Example");
// Ans: Example.com

// Search for "3" in string "W3Schools.com", and return position:
SELECT INSTR("W3Schools.com", "3") AS MatchPosition;
//Ans : MatchPosition => 2

// earch for "3" in string "W3Schools.com", and return position:
SELECT LOCATE("3", "W3Schools.com") AS MatchPosition;
//Ans : MatchPosition => 2

// Search for "3" in string "W3Schools.com", and return position:
SELECT POSITION("3" IN "W3Schools.com") AS MatchPosition;
//Ans: MatchPosition  => 2

// Extract 3 characters from a string (starting from left):
SELECT LEFT("SQL Tutorial", 3) AS ExtractString;
//Ans: SQL

// Extract a substring from a string (start at position 5, extract 3 characters):
SELECT MID("SQL Tutorial", 5, 3) AS ExtractString;
//Ans: Tut

// Extract 4 characters from a string (starting from right):
SELECT RIGHT("SQL Tutorial is cool", 4) AS ExtractString;
//Ans: cool

// Extract a substring from a string (start at position 5, extract 3 characters):
SELECT SUBSTR("SQL Tutorial", 5, 3) AS ExtractString;
//Ans: Tut

// Extract a substring from a string (start at position 5, extract 3 characters):
SELECT SUBSTRING("SQL Tutorial", 5, 3) AS ExtractString;
//Ans: Tut

// Remove leading and trailing spaces from a string:
SELECT TRIM('    SQL Tutorial    ') AS TrimmedString;
//Ans: SQL Tutorial

// Remove leading spaces from a string:
SELECT LTRIM("     SQL Tutorial") AS LeftTrimmedString;
//Ans: SQL Tutorial

// Remove trailing spaces from a string:
SELECT RTRIM("SQL Tutorial     ") AS RightTrimmedString;
//Ans: "SQL Tutorial"


// Return a string with 10 space characters:
SELECT SPACE(10);
//Ans: "          " SPACE(10)

// Compare two strings:
SELECT STRCMP("SQL Tutorial", "SQL Tutorial");
//Ans: 0
// Return Values
// If string1 = string2, this function returns 0
// If string1 < string2, this function returns -1
// If string1 > string2, this function returns 1


// Return a substring of a string before a specified number of delimiter occurs:
SELECT SUBSTRING_INDEX("www.w3schools.com", ".", 1);
//Ans: www

// Convert the text to lower-case:
SELECT LCASE("SQL Tutorial is FUN!");
//Ans: sql tutorial is fun!


// Convert the text to upper-case:
SELECT UCASE("SQL Tutorial is FUN!");
//Ans: SQL TUTORIAL IS FUN!

// Convert the text to upper-case:
SELECT UPPER("SQL Tutorial is FUN!");
//Ans: SQL TUTORIAL IS FUN!

// Convert the text to lower-case:
SELECT LCASE("SQL Tutorial is FUN!");
//Ans: sql tutorial is fun!

// Convert the text to lower-case:
SELECT LOWER("SQL Tutorial is FUN!");
//Ans: sql tutorial is fun!

// Left-pad the string with "ABC", to a total length of 20:
SELECT LPAD("SQL Tutorial", 20, "ABC");
//Ans : ABCABCABSQL Tutorial

// Right-pad the string with "ABC", to a total length of 20:
SELECT RPAD("SQL Tutorial", 20, "ABC");
//Ans: SQL TutorialABCABCAB

// Repeat a string 3 times:
SELECT REPEAT("SQL Tutorial", 3);
//Ans: SQL TutorialSQL TutorialSQL Tutorial

// Replace "SQL" with "HTML":
SELECT REPLACE("SQL Tutorial", "SQL", "HTML");
//Ans: HTML Tutorial

// Reverse a string:
SELECT REVERSE("SQL Tutorial");
//Ans: lairotuT LQS
