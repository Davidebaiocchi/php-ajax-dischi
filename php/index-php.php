<?php
    include __DIR__ . '/../db/dischi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <header>
        
    </header>

    <main>
        <ul>
            <?php foreach($dischi as $disco){  
            ?>
            <li>
                <?php echo $disco['title'].'<br>'.$disco['author'].'<br>'.$disco['year'] ?>
                <img src="<?php echo $disco['poster'] ?>" alt="">
            </li>
            <?php } ?>
        </ul>
    </main>

</body>
</html>