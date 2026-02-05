<?php
    include "../db.php";

    $title = "SUBSTRING()";
    $sql = "SELECT id, SUBSTRING(email, 1, 5) AS email_start FROM employees;";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h2><?php echo $title; ?> Output</h2>
    <a href="../index.php">Back</a>

    <pre><?php echo htmlspecialchars($sql); ?></pre>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>id</th>
            <th>email_start</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                <td><?php echo htmlspecialchars($row['email_start']); ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html> 
