<?php

$stringRows = [
    [
        "SQL Function" => "ASCII()",
        "Description"  => "Returns the ASCII value of a character.",
        "Example Code" => "SELECT ASCII('A') AS value;",
        "Link"         => "functions/ascii.php"
    ],
    [
        "SQL Function" => "CHAR_LENGTH()",
        "Description"  => "Returns the number of characters in a string.",
        "Example Code" => "SELECT CHAR_LENGTH('Hello') AS value;",
        "Link"         => "functions/char_length.php"
    ],
    [
        "SQL Function" => "CHARACTER_LENGTH()",
        "Description"  => "Same as CHAR_LENGTH(), returns number of characters.",
        "Example Code" => "SELECT CHARACTER_LENGTH('Hello') AS value;",
        "Link"         => "functions/character_length.php"
    ],
    [
        "SQL Function" => "CONCAT()",
        "Description"  => "Combines two or more strings into one.",
        "Example Code" => "SELECT id, CONCAT(first_name,' ',last_name) AS full_name FROM employees;",
        "Link"         => "functions/concat.php"
    ],
    [
        "SQL Function" => "CONCAT_WS()",
        "Description"  => "Combines strings with a separator.",
        "Example Code" => "SELECT CONCAT_WS('-', 'IT', '223', 'Task3') AS value;",
        "Link"         => "functions/concat_ws.php"
    ],
    [
        "SQL Function" => "FIELD()",
        "Description"  => "Returns the index position of a value in a list.",
        "Example Code" => "SELECT FIELD('b','a','b','c') AS value;",
        "Link"         => "functions/field.php"
    ],
    [
        "SQL Function" => "FIND_IN_SET()",
        "Description"  => "Returns the position of a string within a comma-separated list.",
        "Example Code" => "SELECT FIND_IN_SET('b','a,b,c,d') AS value;",
        "Link"         => "functions/find_in_set.php"
    ],
    [
        "SQL Function" => "FORMAT()",
        "Description"  => "Formats a number with commas and decimals.",
        "Example Code" => "SELECT FORMAT(12345.6789, 2) AS value;",
        "Link"         => "functions/format.php"
    ],
    [
        "SQL Function" => "INSERT()",
        "Description"  => "Inserts a substring into a string at a specified position.",
        "Example Code" => "SELECT INSERT('W3Schools', 3, 2, 'XX') AS value;",
        "Link"         => "functions/insert.php"
    ],
    [
        "SQL Function" => "INSTR()",
        "Description"  => "Returns the position of the first occurrence of a string.",
        "Example Code" => "SELECT INSTR('W3Schools', 'School') AS value;",
        "Link"         => "functions/instr.php"
    ],
    [
        "SQL Function" => "LCASE()",
        "Description"  => "Converts a string to lowercase (same as LOWER).",
        "Example Code" => "SELECT LCASE('HELLO') AS value;",
        "Link"         => "functions/lcase.php"
    ],
    [
        "SQL Function" => "LEFT()",
        "Description"  => "Returns the left part of a string.",
        "Example Code" => "SELECT LEFT('W3Schools', 2) AS value;",
        "Link"         => "functions/left.php"
    ],
    [
        "SQL Function" => "LENGTH()",
        "Description"  => "Returns the length of a string (number of characters).",
        "Example Code" => "SELECT id, email, LENGTH(email) AS email_len FROM employees;",
        "Link"         => "functions/length.php"
    ],
    [
        "SQL Function" => "LOCATE()",
        "Description"  => "Returns the position of a substring within a string.",
        "Example Code" => "SELECT LOCATE('School','W3Schools') AS value;",
        "Link"         => "functions/locate.php"
    ],
    [
        "SQL Function" => "LOWER()",
        "Description"  => "Converts a string to lowercase.",
        "Example Code" => "SELECT id, LOWER(department) AS dept_lower FROM employees;",
        "Link"         => "functions/lower.php"
    ],
    [
        "SQL Function" => "LPAD()",
        "Description"  => "Left-pads a string with another string until a certain length.",
        "Example Code" => "SELECT LPAD('123', 5, '0') AS value;",
        "Link"         => "functions/lpad.php"
    ],
    [
        "SQL Function" => "LTRIM()",
        "Description"  => "Removes leading spaces from a string.",
        "Example Code" => "SELECT LTRIM('   Hello') AS value;",
        "Link"         => "functions/ltrim.php"
    ],
    [
        "SQL Function" => "MID()",
        "Description"  => "Extracts a substring from a string (same as SUBSTRING).",
        "Example Code" => "SELECT MID('W3Schools', 3, 4) AS value;",
        "Link"         => "functions/mid.php"
    ],
    [
        "SQL Function" => "POSITION()",
        "Description"  => "Returns position of substring in a string.",
        "Example Code" => "SELECT POSITION('School' IN 'W3Schools') AS value;",
        "Link"         => "functions/position.php"
    ],
    [
        "SQL Function" => "REPEAT()",
        "Description"  => "Repeats a string a specified number of times.",
        "Example Code" => "SELECT REPEAT('Hi', 3) AS value;",
        "Link"         => "functions/repeat.php"
    ],
    [
        "SQL Function" => "REPLACE()",
        "Description"  => "Replaces occurrences of a substring in a string.",
        "Example Code" => "SELECT id, REPLACE(email,'@example.com','@school.edu') AS new_email FROM employees;",
        "Link"         => "functions/replace.php"
    ],
    [
        "SQL Function" => "REVERSE()",
        "Description"  => "Reverses a string.",
        "Example Code" => "SELECT REVERSE('W3Schools') AS value;",
        "Link"         => "functions/reverse.php"
    ],
    [
        "SQL Function" => "RIGHT()",
        "Description"  => "Returns the right part of a string.",
        "Example Code" => "SELECT RIGHT('W3Schools', 3) AS value;",
        "Link"         => "functions/right.php"
    ],
    [
        "SQL Function" => "RPAD()",
        "Description"  => "Right-pads a string with another string until a certain length.",
        "Example Code" => "SELECT RPAD('123', 5, '0') AS value;",
        "Link"         => "functions/rpad.php"
    ],
    [
        "SQL Function" => "RTRIM()",
        "Description"  => "Removes trailing spaces from a string.",
        "Example Code" => "SELECT RTRIM('Hello   ') AS value;",
        "Link"         => "functions/rtrim.php"
    ],
    [
        "SQL Function" => "SPACE()",
        "Description"  => "Returns a string of spaces of specified length.",
        "Example Code" => "SELECT CONCAT('A', SPACE(5), 'B') AS value;",
        "Link"         => "functions/space.php"
    ],
    [
        "SQL Function" => "STRCMP()",
        "Description"  => "Compares two strings and returns 0, 1, or -1.",
        "Example Code" => "SELECT STRCMP('a','b') AS value;",
        "Link"         => "functions/strcmp.php"
    ],
    [
        "SQL Function" => "SUBSTR()",
        "Description"  => "Extracts a substring from a string.",
        "Example Code" => "SELECT SUBSTR('W3Schools', 3, 4) AS value;",
        "Link"         => "functions/substr.php"
    ],
    [
        "SQL Function" => "SUBSTRING()",
        "Description"  => "Extracts a substring from a string.",
        "Example Code" => "SELECT id, SUBSTRING(email,1,5) AS email_start FROM employees;",
        "Link"         => "functions/substring.php"
    ],
    [
        "SQL Function" => "SUBSTRING_INDEX()",
        "Description"  => "Returns a substring from a string before a specified number of delimiters.",
        "Example Code" => "SELECT SUBSTRING_INDEX('a,b,c,d', ',', 2) AS value;",
        "Link"         => "functions/substring_index.php"
    ],
    [
        "SQL Function" => "TRIM()",
        "Description"  => "Removes leading and trailing spaces from a string.",
        "Example Code" => "SELECT TRIM('   Hello   ') AS value;",
        "Link"         => "functions/trim.php"
    ],
    [
        "SQL Function" => "UCASE()",
        "Description"  => "Converts a string to uppercase (same as UPPER).",
        "Example Code" => "SELECT UCASE('hello') AS value;",
        "Link"         => "functions/ucase.php"
    ],
    [
        "SQL Function" => "UPPER()",
        "Description"  => "Converts a string to uppercase.",
        "Example Code" => "SELECT id, UPPER(department) AS dept_upper FROM employees;",
        "Link"         => "functions/upper.php"
    ],
];

$numericRows = [
    [
        "SQL Function" => "ABS()",
        "Description"  => "Returns the absolute value of a number.",
        "Example Code" => "SELECT ABS(-10) AS value;",
        "Link"         => "functions/abs.php"
    ],
    [
        "SQL Function" => "ACOS()",
        "Description"  => "Returns the arc cosine of a number.",
        "Example Code" => "SELECT ACOS(0.5) AS value;",
        "Link"         => "functions/acos.php"
    ],
    [
        "SQL Function" => "ASIN()",
        "Description"  => "Returns the arc sine of a number.",
        "Example Code" => "SELECT ASIN(0.5) AS value;",
        "Link"         => "functions/asin.php"
    ],
    [
        "SQL Function" => "ATAN()",
        "Description"  => "Returns the arc tangent of a number.",
        "Example Code" => "SELECT ATAN(1) AS value;",
        "Link"         => "functions/atan.php"
    ],
    [
        "SQL Function" => "ATAN2()",
        "Description"  => "Returns the arc tangent of two numbers.",
        "Example Code" => "SELECT ATAN2(2,1) AS value;",
        "Link"         => "functions/atan2.php"
    ],
    [
        "SQL Function" => "AVG()",
        "Description"  => "Gets average value in a group (aggregate).",
        "Example Code" => "SELECT department, AVG(salary) AS avg_salary FROM employees GROUP BY department;",
        "Link"         => "functions/avg.php"
    ],
    [
        "SQL Function" => "CEIL()",
        "Description"  => "Returns the smallest integer value that is greater than or equal to a number.",
        "Example Code" => "SELECT CEIL(12.34) AS value;",
        "Link"         => "functions/ceil.php"
    ],
    [
        "SQL Function" => "CEILING()",
        "Description"  => "Same as CEIL().",
        "Example Code" => "SELECT CEILING(12.34) AS value;",
        "Link"         => "functions/ceiling.php"
    ],
    [
        "SQL Function" => "COS()",
        "Description"  => "Returns the cosine of a number.",
        "Example Code" => "SELECT COS(1) AS value;",
        "Link"         => "functions/cos.php"
    ],
    [
        "SQL Function" => "COT()",
        "Description"  => "Returns the cotangent of a number.",
        "Example Code" => "SELECT COT(1) AS value;",
        "Link"         => "functions/cot.php"
    ],
    [
        "SQL Function" => "COUNT()",
        "Description"  => "Counts rows in a group (aggregate).",
        "Example Code" => "SELECT department, COUNT(*) AS total FROM employees GROUP BY department;",
        "Link"         => "functions/count.php"
    ],
    [
        "SQL Function" => "DEGREES()",
        "Description"  => "Converts radians to degrees.",
        "Example Code" => "SELECT DEGREES(1) AS value;",
        "Link"         => "functions/degrees.php"
    ],
    [
        "SQL Function" => "DIV",
        "Description"  => "Returns integer division.",
        "Example Code" => "SELECT 10 DIV 3 AS value;",
        "Link"         => "functions/div.php"
    ],
    [
        "SQL Function" => "EXP()",
        "Description"  => "Returns e raised to the power of a number.",
        "Example Code" => "SELECT EXP(1) AS value;",
        "Link"         => "functions/exp.php"
    ],
    [
        "SQL Function" => "FLOOR()",
        "Description"  => "Returns the largest integer value that is less than or equal to a number.",
        "Example Code" => "SELECT FLOOR(12.99) AS value;",
        "Link"         => "functions/floor.php"
    ],
    [
        "SQL Function" => "GREATEST()",
        "Description"  => "Returns the greatest value in a list.",
        "Example Code" => "SELECT GREATEST(10, 20, 5) AS value;",
        "Link"         => "functions/greatest.php"
    ],
    [
        "SQL Function" => "LEAST()",
        "Description"  => "Returns the smallest value in a list.",
        "Example Code" => "SELECT LEAST(10, 20, 5) AS value;",
        "Link"         => "functions/least.php"
    ],
    [
        "SQL Function" => "LN()",
        "Description"  => "Returns the natural logarithm of a number.",
        "Example Code" => "SELECT LN(2) AS value;",
        "Link"         => "functions/ln.php"
    ],
    [
        "SQL Function" => "LOG()",
        "Description"  => "Returns the natural logarithm (or base specified) of a number.",
        "Example Code" => "SELECT LOG(10) AS value;",
        "Link"         => "functions/log.php"
    ],
    [
        "SQL Function" => "LOG10()",
        "Description"  => "Returns the base-10 logarithm of a number.",
        "Example Code" => "SELECT LOG10(100) AS value;",
        "Link"         => "functions/log10.php"
    ],
    [
        "SQL Function" => "LOG2()",
        "Description"  => "Returns the base-2 logarithm of a number.",
        "Example Code" => "SELECT LOG2(8) AS value;",
        "Link"         => "functions/log2.php"
    ],
    [
        "SQL Function" => "MAX()",
        "Description"  => "Returns the maximum value (aggregate).",
        "Example Code" => "SELECT MAX(salary) AS max_salary FROM employees;",
        "Link"         => "functions/max.php"
    ],
    [
        "SQL Function" => "MIN()",
        "Description"  => "Returns the minimum value (aggregate).",
        "Example Code" => "SELECT MIN(salary) AS min_salary FROM employees;",
        "Link"         => "functions/min.php"
    ],
    [
        "SQL Function" => "MOD()",
        "Description"  => "Returns the remainder of a division.",
        "Example Code" => "SELECT MOD(10,3) AS value;",
        "Link"         => "functions/mod.php"
    ],
    [
        "SQL Function" => "PI()",
        "Description"  => "Returns the value of PI.",
        "Example Code" => "SELECT PI() AS value;",
        "Link"         => "functions/pi.php"
    ],
    [
        "SQL Function" => "POW()",
        "Description"  => "Returns a number raised to the power of another number.",
        "Example Code" => "SELECT POW(2,3) AS value;",
        "Link"         => "functions/pow.php"
    ],
    [
        "SQL Function" => "POWER()",
        "Description"  => "Same as POW().",
        "Example Code" => "SELECT POWER(2,3) AS value;",
        "Link"         => "functions/power.php"
    ],
    [
        "SQL Function" => "RADIANS()",
        "Description"  => "Converts degrees to radians.",
        "Example Code" => "SELECT RADIANS(180) AS value;",
        "Link"         => "functions/radians.php"
    ],
    [
        "SQL Function" => "RAND()",
        "Description"  => "Returns a random number.",
        "Example Code" => "SELECT RAND() AS value;",
        "Link"         => "functions/rand.php"
    ],
    [
        "SQL Function" => "ROUND()",
        "Description"  => "Rounds a number to a specified number of decimals.",
        "Example Code" => "SELECT ROUND(12.3456,2) AS value;",
        "Link"         => "functions/round.php"
    ],
    [
        "SQL Function" => "SIGN()",
        "Description"  => "Returns the sign of a number (-1, 0, 1).",
        "Example Code" => "SELECT SIGN(-10) AS value;",
        "Link"         => "functions/sign.php"
    ],
    [
        "SQL Function" => "SIN()",
        "Description"  => "Returns the sine of a number.",
        "Example Code" => "SELECT SIN(1) AS value;",
        "Link"         => "functions/sin.php"
    ],
    [
        "SQL Function" => "SQRT()",
        "Description"  => "Returns the square root of a number.",
        "Example Code" => "SELECT SQRT(16) AS value;",
        "Link"         => "functions/sqrt.php"
    ],
    [
        "SQL Function" => "SUM()",
        "Description"  => "Adds values in a group (aggregate).",
        "Example Code" => "SELECT department, SUM(salary) AS total_salary FROM employees GROUP BY department;",
        "Link"         => "functions/sum.php"
    ],
    [
        "SQL Function" => "TAN()",
        "Description"  => "Returns the tangent of a number.",
        "Example Code" => "SELECT TAN(1) AS value;",
        "Link"         => "functions/tan.php"
    ],
    [
        "SQL Function" => "TRUNCATE()",
        "Description"  => "Truncates a number to specified decimals.",
        "Example Code" => "SELECT TRUNCATE(12.3456,2) AS value;",
        "Link"         => "functions/truncate.php"
    ],
];

$dateRows = [
    [
        "SQL Function" => "ADDDATE()",
        "Description"  => "Adds a time/date interval to a date.",
        "Example Code" => "SELECT ADDDATE(CURDATE(), INTERVAL 10 DAY) AS value;",
        "Link"         => "functions/adddate.php"
    ],
    [
        "SQL Function" => "ADDTIME()",
        "Description"  => "Adds time to a time/datetime.",
        "Example Code" => "SELECT ADDTIME(CURTIME(), '01:10:00') AS value;",
        "Link"         => "functions/addtime.php"
    ],
    [
        "SQL Function" => "CURDATE()",
        "Description"  => "Returns the current date.",
        "Example Code" => "SELECT CURDATE() AS value;",
        "Link"         => "functions/curdate.php"
    ],
    [
        "SQL Function" => "CURRENT_DATE()",
        "Description"  => "Returns the current date.",
        "Example Code" => "SELECT CURRENT_DATE() AS value;",
        "Link"         => "functions/current_date.php"
    ],
    [
        "SQL Function" => "CURRENT_TIME()",
        "Description"  => "Returns the current time.",
        "Example Code" => "SELECT CURRENT_TIME() AS value;",
        "Link"         => "functions/current_time.php"
    ],
    [
        "SQL Function" => "CURRENT_TIMESTAMP()",
        "Description"  => "Returns the current date and time.",
        "Example Code" => "SELECT CURRENT_TIMESTAMP() AS value;",
        "Link"         => "functions/current_timestamp.php"
    ],
    [
        "SQL Function" => "CURTIME()",
        "Description"  => "Returns the current time.",
        "Example Code" => "SELECT CURTIME() AS value;",
        "Link"         => "functions/curtime.php"
    ],
    [
        "SQL Function" => "DATE()",
        "Description"  => "Extracts the date part of a datetime.",
        "Example Code" => "SELECT DATE(NOW()) AS value;",
        "Link"         => "functions/date.php"
    ],
    [
        "SQL Function" => "DATEDIFF()",
        "Description"  => "Returns the difference in days between two dates.",
        "Example Code" => "SELECT DATEDIFF(CURDATE(), '2026-01-01') AS value;",
        "Link"         => "functions/datediff.php"
    ],
    [
        "SQL Function" => "DATE_ADD()",
        "Description"  => "Adds a time/date interval to a date.",
        "Example Code" => "SELECT DATE_ADD(CURDATE(), INTERVAL 1 MONTH) AS value;",
        "Link"         => "functions/date_add.php"
    ],
    [
        "SQL Function" => "DATE_FORMAT()",
        "Description"  => "Formats a date based on a given format string.",
        "Example Code" => "SELECT id, DATE_FORMAT(hire_date,'%M %d, %Y') AS hired FROM employees;",
        "Link"         => "functions/date_format.php"
    ],
    [
        "SQL Function" => "DATE_SUB()",
        "Description"  => "Subtracts a time/date interval from a date.",
        "Example Code" => "SELECT DATE_SUB(CURDATE(), INTERVAL 7 DAY) AS value;",
        "Link"         => "functions/date_sub.php"
    ],
    [
        "SQL Function" => "DAY()",
        "Description"  => "Returns the day of the month for a date.",
        "Example Code" => "SELECT DAY(CURDATE()) AS value;",
        "Link"         => "functions/day.php"
    ],
    [
        "SQL Function" => "DAYNAME()",
        "Description"  => "Returns the weekday name for a date.",
        "Example Code" => "SELECT DAYNAME(CURDATE()) AS value;",
        "Link"         => "functions/dayname.php"
    ],
    [
        "SQL Function" => "DAYOFMONTH()",
        "Description"  => "Returns the day of the month for a date.",
        "Example Code" => "SELECT DAYOFMONTH(CURDATE()) AS value;",
        "Link"         => "functions/dayofmonth.php"
    ],
    [
        "SQL Function" => "DAYOFWEEK()",
        "Description"  => "Returns the weekday index for a date.",
        "Example Code" => "SELECT DAYOFWEEK(CURDATE()) AS value;",
        "Link"         => "functions/dayofweek.php"
    ],
    [
        "SQL Function" => "DAYOFYEAR()",
        "Description"  => "Returns the day of the year for a date.",
        "Example Code" => "SELECT DAYOFYEAR(CURDATE()) AS value;",
        "Link"         => "functions/dayofyear.php"
    ],
    [
        "SQL Function" => "EXTRACT()",
        "Description"  => "Extracts a part of a date.",
        "Example Code" => "SELECT EXTRACT(MONTH FROM CURDATE()) AS value;",
        "Link"         => "functions/extract.php"
    ],
    [
        "SQL Function" => "FROM_DAYS()",
        "Description"  => "Converts a day number to a date.",
        "Example Code" => "SELECT FROM_DAYS(738000) AS value;",
        "Link"         => "functions/from_days.php"
    ],
    [
        "SQL Function" => "HOUR()",
        "Description"  => "Returns the hour part of a time/datetime.",
        "Example Code" => "SELECT HOUR(NOW()) AS value;",
        "Link"         => "functions/hour.php"
    ],
    [
        "SQL Function" => "LAST_DAY()",
        "Description"  => "Returns the last day of the month for a date.",
        "Example Code" => "SELECT LAST_DAY(CURDATE()) AS value;",
        "Link"         => "functions/last_day.php"
    ],
    [
        "SQL Function" => "LOCALTIME()",
        "Description"  => "Returns the current date and time.",
        "Example Code" => "SELECT LOCALTIME() AS value;",
        "Link"         => "functions/localtime.php"
    ],
    [
        "SQL Function" => "LOCALTIMESTAMP()",
        "Description"  => "Returns the current date and time.",
        "Example Code" => "SELECT LOCALTIMESTAMP() AS value;",
        "Link"         => "functions/localtimestamp.php"
    ],
    [
        "SQL Function" => "MAKEDATE()",
        "Description"  => "Creates a date from year and day-of-year.",
        "Example Code" => "SELECT MAKEDATE(2026, 32) AS value;",
        "Link"         => "functions/makedate.php"
    ],
    [
        "SQL Function" => "MAKETIME()",
        "Description"  => "Creates a time from hour, minute, second.",
        "Example Code" => "SELECT MAKETIME(12,30,15) AS value;",
        "Link"         => "functions/maketime.php"
    ],
    [
        "SQL Function" => "MICROSECOND()",
        "Description"  => "Returns the microsecond part of a time/datetime.",
        "Example Code" => "SELECT MICROSECOND(CURRENT_TIMESTAMP(6)) AS value;",
        "Link"         => "functions/microsecond.php"
    ],
    [
        "SQL Function" => "MINUTE()",
        "Description"  => "Returns the minute part of a time/datetime.",
        "Example Code" => "SELECT MINUTE(NOW()) AS value;",
        "Link"         => "functions/minute.php"
    ],
    [
        "SQL Function" => "MONTH()",
        "Description"  => "Returns the month part of a date.",
        "Example Code" => "SELECT MONTH(CURDATE()) AS value;",
        "Link"         => "functions/month.php"
    ],
    [
        "SQL Function" => "MONTHNAME()",
        "Description"  => "Returns the month name for a date.",
        "Example Code" => "SELECT MONTHNAME(CURDATE()) AS value;",
        "Link"         => "functions/monthname.php"
    ],
    [
        "SQL Function" => "NOW()",
        "Description"  => "Returns the current date and time.",
        "Example Code" => "SELECT NOW() AS current_datetime;",
        "Link"         => "functions/now.php"
    ],
    [
        "SQL Function" => "PERIOD_ADD()",
        "Description"  => "Adds a number of months to a period.",
        "Example Code" => "SELECT PERIOD_ADD(202401, 3) AS value;",
        "Link"         => "functions/period_add.php"
    ],
    [
        "SQL Function" => "PERIOD_DIFF()",
        "Description"  => "Returns the number of months between two periods.",
        "Example Code" => "SELECT PERIOD_DIFF(202412, 202401) AS value;",
        "Link"         => "functions/period_diff.php"
    ],
    [
        "SQL Function" => "QUARTER()",
        "Description"  => "Returns the quarter of the year for a date.",
        "Example Code" => "SELECT QUARTER(CURDATE()) AS value;",
        "Link"         => "functions/quarter.php"
    ],
    [
        "SQL Function" => "SECOND()",
        "Description"  => "Returns the second part of a time/datetime.",
        "Example Code" => "SELECT SECOND(NOW()) AS value;",
        "Link"         => "functions/second.php"
    ],
    [
        "SQL Function" => "SEC_TO_TIME()",
        "Description"  => "Converts seconds to time format.",
        "Example Code" => "SELECT SEC_TO_TIME(3661) AS value;",
        "Link"         => "functions/sec_to_time.php"
    ],
    [
        "SQL Function" => "STR_TO_DATE()",
        "Description"  => "Converts a string to a date using format.",
        "Example Code" => "SELECT STR_TO_DATE('2026-02-06','%Y-%m-%d') AS value;",
        "Link"         => "functions/str_to_date.php"
    ],
    [
        "SQL Function" => "SUBDATE()",
        "Description"  => "Subtracts days from a date.",
        "Example Code" => "SELECT SUBDATE(CURDATE(), INTERVAL 5 DAY) AS value;",
        "Link"         => "functions/subdate.php"
    ],
    [
        "SQL Function" => "SUBTIME()",
        "Description"  => "Subtracts time from a datetime.",
        "Example Code" => "SELECT SUBTIME(NOW(), '01:00:00') AS value;",
        "Link"         => "functions/subtime.php"
    ],
    [
        "SQL Function" => "SYSDATE()",
        "Description"  => "Returns the current date and time.",
        "Example Code" => "SELECT SYSDATE() AS value;",
        "Link"         => "functions/sysdate.php"
    ],
    [
        "SQL Function" => "TIME()",
        "Description"  => "Extracts the time part of a datetime.",
        "Example Code" => "SELECT TIME(NOW()) AS value;",
        "Link"         => "functions/time.php"
    ],
    [
        "SQL Function" => "TIME_FORMAT()",
        "Description"  => "Formats a time value.",
        "Example Code" => "SELECT TIME_FORMAT(CURTIME(), '%H:%i') AS value;",
        "Link"         => "functions/time_format.php"
    ],
    [
        "SQL Function" => "TIME_TO_SEC()",
        "Description"  => "Converts time to seconds.",
        "Example Code" => "SELECT TIME_TO_SEC(CURTIME()) AS value;",
        "Link"         => "functions/time_to_sec.php"
    ],
    [
        "SQL Function" => "TIMEDIFF()",
        "Description"  => "Returns the difference between two time values.",
        "Example Code" => "SELECT TIMEDIFF('12:30:00','11:00:00') AS value;",
        "Link"         => "functions/timediff.php"
    ],
    [
        "SQL Function" => "TIMESTAMP()",
        "Description"  => "Returns a datetime value.",
        "Example Code" => "SELECT TIMESTAMP(CURDATE(), CURTIME()) AS value;",
        "Link"         => "functions/timestamp.php"
    ],
    [
        "SQL Function" => "TO_DAYS()",
        "Description"  => "Returns the number of days since year 0.",
        "Example Code" => "SELECT TO_DAYS(CURDATE()) AS value;",
        "Link"         => "functions/to_days.php"
    ],
    [
        "SQL Function" => "WEEK()",
        "Description"  => "Returns the week number for a date.",
        "Example Code" => "SELECT WEEK(CURDATE()) AS value;",
        "Link"         => "functions/week.php"
    ],
    [
        "SQL Function" => "WEEKDAY()",
        "Description"  => "Returns the weekday index (Monday=0).",
        "Example Code" => "SELECT WEEKDAY(CURDATE()) AS value;",
        "Link"         => "functions/weekday.php"
    ],
    [
        "SQL Function" => "WEEKOFYEAR()",
        "Description"  => "Returns the week number of the year.",
        "Example Code" => "SELECT WEEKOFYEAR(CURDATE()) AS value;",
        "Link"         => "functions/weekofyear.php"
    ],
    [
        "SQL Function" => "YEAR()",
        "Description"  => "Returns the year part of a date.",
        "Example Code" => "SELECT YEAR(CURDATE()) AS value;",
        "Link"         => "functions/year.php"
    ],
    [
        "SQL Function" => "YEARWEEK()",
        "Description"  => "Returns year and week for a date.",
        "Example Code" => "SELECT YEARWEEK(CURDATE()) AS value;",
        "Link"         => "functions/yearweek.php"
    ],
];

$advancedRows = [
    [
        "SQL Function" => "BIN()",
        "Description"  => "Returns a binary representation of a number.",
        "Example Code" => "SELECT BIN(10) AS value;",
        "Link"         => "functions/bin.php"
    ],
    [
        "SQL Function" => "BINARY",
        "Description"  => "Converts a value to a binary string.",
        "Example Code" => "SELECT BINARY('abc') AS value;",
        "Link"         => "functions/binary.php"
    ],
    [
        "SQL Function" => "CASE",
        "Description"  => "Returns a result based on conditions.",
        "Example Code" => "SELECT CASE WHEN 5 > 3 THEN 'Yes' ELSE 'No' END AS value;",
        "Link"         => "functions/case.php"
    ],
    [
        "SQL Function" => "CAST()",
        "Description"  => "Converts a value to a specified type.",
        "Example Code" => "SELECT CAST(123.45 AS SIGNED) AS value;",
        "Link"         => "functions/cast.php"
    ],
    [
        "SQL Function" => "COALESCE()",
        "Description"  => "Returns the first non-NULL value in a list.",
        "Example Code" => "SELECT id, name, COALESCE(phone, alt_phone, 'No Contact') AS contact FROM clients;",
        "Link"         => "functions/coalesce.php"
    ],
    [
        "SQL Function" => "CONNECTION_ID()",
        "Description"  => "Returns the connection ID for the current connection.",
        "Example Code" => "SELECT CONNECTION_ID() AS value;",
        "Link"         => "functions/connection_id.php"
    ],
    [
        "SQL Function" => "CONV()",
        "Description"  => "Converts a number from one base to another.",
        "Example Code" => "SELECT CONV('A',16,10) AS value;",
        "Link"         => "functions/conv.php"
    ],
    [
        "SQL Function" => "CONVERT()",
        "Description"  => "Converts a value to a different type.",
        "Example Code" => "SELECT CONVERT('123', SIGNED) AS value;",
        "Link"         => "functions/convert.php"
    ],
    [
        "SQL Function" => "CURRENT_USER()",
        "Description"  => "Returns the current MySQL user.",
        "Example Code" => "SELECT CURRENT_USER() AS value;",
        "Link"         => "functions/current_user.php"
    ],
    [
        "SQL Function" => "DATABASE()",
        "Description"  => "Returns the name of the current database.",
        "Example Code" => "SELECT DATABASE() AS value;",
        "Link"         => "functions/database.php"
    ],
    [
        "SQL Function" => "IF()",
        "Description"  => "Returns a value if a condition is true, otherwise another value.",
        "Example Code" => "SELECT IF(5>3, 'Yes', 'No') AS value;",
        "Link"         => "functions/if.php"
    ],
    [
        "SQL Function" => "IFNULL()",
        "Description"  => "Returns a fallback value if NULL.",
        "Example Code" => "SELECT id, name, IFNULL(phone,'No Phone') AS phone_display FROM clients;",
        "Link"         => "functions/ifnull.php"
    ],
    [
        "SQL Function" => "ISNULL()",
        "Description"  => "Returns 1 if expression is NULL, otherwise 0.",
        "Example Code" => "SELECT ISNULL(NULL) AS value;",
        "Link"         => "functions/isnull.php"
    ],
    [
        "SQL Function" => "LAST_INSERT_ID()",
        "Description"  => "Returns the last automatically generated ID.",
        "Example Code" => "INSERT INTO logs(note) VALUES ('test'); SELECT LAST_INSERT_ID() AS value;",
        "Link"         => "functions/last_insert_id.php"
    ],
    [
        "SQL Function" => "NULLIF()",
        "Description"  => "Returns NULL if two expressions are equal.",
        "Example Code" => "SELECT NULLIF(5,5) AS value;",
        "Link"         => "functions/nullif.php"
    ],
    [
        "SQL Function" => "SESSION_USER()",
        "Description"  => "Returns the session user.",
        "Example Code" => "SELECT SESSION_USER() AS value;",
        "Link"         => "functions/session_user.php"
    ],
    [
        "SQL Function" => "SYSTEM_USER()",
        "Description"  => "Returns the system user.",
        "Example Code" => "SELECT SYSTEM_USER() AS value;",
        "Link"         => "functions/system_user.php"
    ],
    [
        "SQL Function" => "USER()",
        "Description"  => "Returns the current user name and host name.",
        "Example Code" => "SELECT USER() AS value;",
        "Link"         => "functions/user.php"
    ],
    [
        "SQL Function" => "VERSION()",
        "Description"  => "Returns the MySQL server version.",
        "Example Code" => "SELECT VERSION() AS value;",
        "Link"         => "functions/version.php"
    ],
];

$sections = [
    "String Functions"   => $stringRows,
    "Numeric Functions"  => $numericRows,
    "Date Functions"     => $dateRows,
    "Advanced Functions" => $advancedRows,
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IT223 Task 3 - SQL Functions</title>
    <style>
        body{font-family:Arial, sans-serif; margin:24px;}
        table{border-collapse:collapse; width:100%; margin-bottom:30px;}
        th,td{border:1px solid #ddd; padding:10px; vertical-align:top;}
        th{background:#f5f5f5;}
        pre{margin:0; background:#fafafa; padding:10px; overflow:auto;}
        a{color:#0b5ed7; text-decoration:none;}
        a:hover{text-decoration:underline;}
    </style>
</head>
<body>
    <h2>IT223 – Task 3: Apply SQL Functions in Actual SQL Code</h2>
    <p>Click <strong>View Output</strong> to run the query in a separate PHP file.</p>

    <?php foreach ($sections as $title => $rows): ?>
        <h3><?php echo htmlspecialchars($title); ?></h3>
        <table>
            <thead>
                <tr>
                    <th>SQL Function</th>
                    <th>Description</th>
                    <th>Example Code</th>
                    <th>Example Output</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($rows as $r): ?>
                <tr>
                    <td><strong><?= htmlspecialchars($r["SQL Function"]) ?></strong></td>
                    <td><?= htmlspecialchars($r["Description"]) ?></td>
                    <td><pre><?= htmlspecialchars($r["Example Code"]) ?></pre></td>
                    <td><a href="<?= htmlspecialchars($r["Link"]) ?>">View Output</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endforeach; ?>
</body>
</html>
