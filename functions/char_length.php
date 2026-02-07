<?php
    include "../db.php";

    $title = "CHAR_LENGTH()";
    $sql = "SELECT CHAR_LENGTH('Hello') AS value;";
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
    <h2><?php echo $title; ?></h2>
    <a href="../index.php">Back</a>
    <pre><?php echo htmlspecialchars($sql); ?></pre>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Character Length</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['value']); ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>