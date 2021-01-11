<?php 
<p>Select employee where there name have a vowel.</p>

$ans = SELECT name FROM employee_list WHERE name REGEXP "[aeiou].*[aeiou]";

<p>Select employee where there name start with  a vowel.</p>

$ans =  SELECT name FROM employee_list WHERE name REGEXP "^[aeiou].*[aeiou]";

<p>Select employee where there name End with  a vowel.</p>
SELECT name FROM employee_list WHERE name REGEXP "[aeiou].*[aeiou]$";

<p>Select employee where there name Start and End with  a vowel.</p>
$ans =  SELECT name FROM employee_list WHERE name REGEXP "^[aeiou].*[aeiou]$";
?>
