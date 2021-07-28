<?php

    $dischi = [
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],
        [
            'title' => 'Famoso',
            'author' => 'Sfera Ebbasta',
            'year' => 2019,
            'poster' => "https://images-na.ssl-images-amazon.com/images/I/91Bjp2F0aGL._AC_SL1500_.jpg",
        ],
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],  
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],  
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],  
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],  
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => "https://i2.wp.com/www.vinylpussycat.com/wp-content/uploads/DSC_0010-12.jpg?fit=765%2C775&ssl=1",
        ],       
    ]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="style.css">
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
                <img src="<?php $disco['poster'] ?>" alt="">
            </li>
            <?php } ?>
        </ul>
    </main>

</body>
</html>