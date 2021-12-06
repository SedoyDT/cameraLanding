<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Лендинг</h1>
<p>
<table>

    <?php
    foreach($data as $row)
    {
        echo '<tr><td>'.$row['name'].'</td><td>'.$row['surname'].'</td><td>'.$row['date_of_birthday'].'</td></tr>';
    }

    ?>
</table>
</p>
</body>
</html>
