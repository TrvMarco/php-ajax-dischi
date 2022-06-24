<?php
include './server/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- CCS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Php dischi</title>
</head>
<body>
    <header>
        <img class="img-fluid" id="logo" src="img/spotify-logo.png" alt="Spotify Logo">
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-lg-5 g-3">
                <?php foreach($database as $album){ ?>
                    <div class="col-12 col-md-4 col-lg" >
                        <div class="album_card text-center">
                            <img style="width: 150px;" src="<?php echo $album['poster']?>" alt="Poster album">
                            <h2 class="text-white text-uppercase"><?php echo $album['title']?></h2>
                            <h5><?php echo $album['author']?></h5>
                            <small><?php echo $album['year']?></small>
                        </div>
                    </div>
                <?php } ?>                
            </div>
        </div>
    </main>
</body>
</html>