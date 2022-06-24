<?php
include './server/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php dischi</title>
</head>
<body>
    <?php foreach($database as $album){ ?>
        <div>
            <img style="width: 150px;" src="<?php echo $album['poster']?>" alt="Poster album">
            <h2>Titolo: <?php echo $album['title']?></h2>
            <h4>Autore: <?php echo $album['author']?></h4>
            <h5>Genere: <?php echo $album['genre']?></h5>
            <small>Anno: <?php echo $album['year']?></small>
        </div>
    <?php } ?>    
</body>
</html>
