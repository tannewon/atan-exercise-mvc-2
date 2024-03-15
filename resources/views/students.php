<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <h1>List of Students</h1>
    <ul>
        <?php foreach($students as $student): ?>
            <li><?php echo $student->name; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
