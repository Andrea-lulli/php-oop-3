<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/audiolibro.php';
include_once __DIR__ . '/classi/cd.php';


$generi = [
  'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Generi('horror', 'icon-font-awesome-horror')
];
var_dump( $generi );

$prodotti = [
  new Libro( 'La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile' ),
  new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),
    new cd('Queen Greatest', 'QUEEN ', 27.99, 'https://immagine-copertina.com', '1989', 'Rock'),
];

$prodotti[1]->formato = "digitale";
$prodotti[1]->tipo = "PDF";
$prodotti[1]->dimensioni = "251kb";
$prodotti[0]->formato = "copertina flessibile";
$prodotti[2]->formato = "CD";

var_dump( $prodotti );

// foreach( $prodotti as $elem ){
//   echo get_class($elem);
//   echo "<br>";
//}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Bookstore</title>

    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- link mio css -->
    <link rel="stylesheet" href="style.css">

    <!-- link fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="conteiner">
        <div>
            <h2>Bookstore</h2>
            <h5>I nostri prodotti</h5>
        </div>

        <div class="conteiner-card">


            <?php foreach ($prodotti as $elem) { ?>
            <div class="card">

                <div class="testo">
                    <h5>
                        <?php echo $elem->nome ?>
                    </h5>
                   
                    <p>
                        <?php  echo "Autore: $elem->autore" ?>
                    </p>

                    <p>
                        <?php  echo "Prezzo: $elem->prezzo" ?>
                    </p>



                    <?php if (get_class($elem) == 'audioLibro'){?>
                    <p>
                        <?php echo  " $elem->durata"?>
                    </p>
                    <p>
                        <?php echo "$elem->piattaforma"?>
                    </p>

                    <?php } ?>

                    <?php if (get_class($elem) == 'cd'){?>
                    <p>
                        <?php echo  "$elem->anno"?>
                    </p>
                    <p>
                        <?php echo " $elem->tipoMusica"?>
                    </p>

                    <?php } ?>

                    <?php if (get_class($elem) == 'libro'){?>
                    <p>
                        <?php echo  "$elem->copertina"?>
                    </p>
                    <p>
                        <?php echo " $elem->pagine"?>
                    </p>

                    <?php } ?>



                </div>




            </div>
            <?php } ?>



        </div>
    </div>
    <!-- script Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>