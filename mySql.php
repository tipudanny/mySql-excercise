Select employee where there name have a vowel.

=> SELECT name FROM employee_list WHERE name REGEXP "[aeiou].*[aeiou]"

Select employee where there name start with  a vowel.

=> SELECT name FROM employee_list WHERE name REGEXP "^[aeiou].*[aeiou]"

Select employee where there name End with  a vowel.
=> SELECT name FROM employee_list WHERE name REGEXP "[aeiou].*[aeiou]$"

Select employee where there name Start and End with  a vowel.
=> SELECT name FROM employee_list WHERE name REGEXP "^[aeiou].*[aeiou]$"
