<?php

$rows = [
    [
        "SQL Function" => "CONCAT()",
        "Description"  => "Combines two or more strings into one.",
        "Example Code" => "SELECT id, CONCAT(first_name,' ',last_name) AS full_name FROM employees;",
        "Link"         => "functions/concat.php"
    ],
    [
        "SQL Function" => "LENGTH()",
        "Description"  => "Returns the length of a string (number of characters).",
        "Example Code" => "SELECT id, email, LENGTH(email) AS email_len FROM employees;",
        "Link"         => "functions/length.php"
    ],
    [
        "SQL Function" => "UPPER()",
        "Description"  => "Converts a string to uppercase.",
        "Example Code" => "SELECT id, UPPER(department) AS dept_upper FROM employees;",
        "Link"         => "functions/upper.php"
    ],
    [
        "SQL Function" => "LOWER()",
        "Description"  => "Converts a string to lowercase.",
        "Example Code" => "SELECT id, LOWER(department) AS dept_lower FROM employees;",
        "Link"         => "functions/lower.php"
    ],
    [
        "SQL Function" => "SUBSTRING()",
        "Description"  => "Extracts a substring from a string.",
        "Example Code" => "SELECT id, SUBSTRING(email,1,5) AS email_start FROM employees;",
        "Link"         => "functions/substring.php"
    ],
    [
        "SQL Function" => "REPLACE()",
        "Description"  => "Replaces occurrences of a substring in a string.",
        "Example Code" => "SELECT id, REPLACE(email,'@example.com','@school.edu') AS new_email FROM employees;",
        "Link"         => "functions/replace.php"
    ],
    [
        "SQL Function" => "NOW()",
        "Description"  => "Returns the current date and time.",
        "Example Code" => "SELECT NOW() AS current_datetime;",
        "Link"         => "functions/now.php"
    ],
    [
        "SQL Function" => "DATE_FORMAT()",
        "Description"  => "Formats a date based on a given format string.",
        "Example Code" => "SELECT id, DATE_FORMAT(hire_date,'%M %d, %Y') AS hired FROM employees;",
        "Link"         => "functions/date_format.php"
    ],
    [
        "SQL Function" => "COUNT()",
        "Description"  => "Counts rows in a group (aggregate).",
        "Example Code" => "SELECT department, COUNT(*) AS total FROM employees GROUP BY department;",
        "Link"         => "functions/count.php"
    ],
    [
        "SQL Function" => "SUM()",
        "Description"  => "Adds values in a group (aggregate).",
        "Example Code" => "SELECT department, SUM(salary) AS total_salary FROM employees GROUP BY department;",
        "Link"         => "functions/sum.php"
    ],
    [
        "SQL Function" => "AVG()",
        "Description"  => "Gets average value in a group (aggregate).",
        "Example Code" => "SELECT department, AVG(salary) AS avg_salary FROM employees GROUP BY department;",
        "Link"         => "functions/avg.php"
    ],
    [
        "SQL Function" => "IFNULL()",
        "Description"  => "Returns a fallback value if NULL.",
        "Example Code" => "SELECT id, name, IFNULL(phone,'No Phone') AS phone_display FROM clients;",
        "Link"         => "functions/ifnull.php"
    ],
    [
        "SQL Function" => "COALESCE()",
        "Description"  => "Returns the first non-NULL value in a list.",
        "Example Code" => "SELECT id, name, COALESCE(phone, alt_phone, 'No Contact') AS contact FROM clients;",
        "Link"         => "functions/coalesce.php"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IT223 Task 3 - SQL Functions</title>
    <style>
        body{font-family:Arial, sans-serif; margin:24px;}
        table{border-collapse:collapse; width:100%;}
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
</body>
</html>
