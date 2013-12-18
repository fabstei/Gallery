<!DOCTYPE HTML>
<html lang="de">
<head>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <meta charset="utf-8">
    <meta name="description" content="Fotoausstellung Usbekistan">
    <meta name="author" content="Anja Reiter, Patrizia Pawelek, Matthias Golbeck, Fabian Steiner">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fotoausstellung Impressionen aus Usbekistan</title>

    <!-- Bootstrap, Blueimp & Jumbotron+Custom CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="header">
        <h3 class="text-muted">Impressionen einer Sommerschule</h3>
    </div>

    <div id="jumbotron-wrapper">
        <div class="jumbotron" id="bg">
            <h1>Fotoausstellung Usbekistan</h1>
        </div>
    </div>

    <div class="row marketing ">
        <div class="col-lg-6">
            <h4>Sommerschule</h4>
            <p>Eine Sommerschule unter der Leitung von Professor <a href="http://www.gose.geschichte.uni-muenchen.de/personen/professoren/schulzewessel/index.html">Martin Schulze Wessel</a>
                und Franziska Davies führte Studierende der <a href="http://www.osteuropastudien.uni-muenchen.de">Osteuropastudien</a> im Oktober 2012 nach Usbekistan im Herzen Zentralasiens.</p>
        </div>

        <div class="col-lg-6">
            <h4>Fotoausstellung</h4>
            <p>Kultur, Religion und Alltag des facettenreichen Landes wurden in zahlreichen Fotografien dokumentiert, die an der <a href="http://www.lmu.de">LMU</a> und
                im <a href="http://www.salonirkutsk.de/">Salon Irkutsk</a> ausgestellt wurden.</p>
        </div>
    </div>

    <div class="row bilder">
        <!-- Images -->
        <div id="links" class="links clearfix mosaicflow">
            <?php
            $dirname = "img/large/";
            $images = glob($dirname."*.jpg");

            foreach($images as $image) {
                echo '
                        <a href="'.$image.'" title="Bild '.substr($image, -9).'" class="mosaicflow__item" data-gallery="">
            <img src="img/small/'.substr($image, -9).'"  alt="Bild Nummer '.substr($image, -9).'">
            </a>';
            }
            ?>
        </div>
    </div>

    <div class="footer">
        <p class="pull-right"><a href="#">Nach oben</a></p>
        <p>Bilder &copy; <a href="http://www.osteuropastudien.de">ESG OES</a>. Die Webseite ist umgesetzt durch <a href="http://fabiansteiner.com">Fabian Steiner</a> und<br>
            basiert auf <a href="http://blueimp.github.io/Gallery/">Gallery</a> von <a href="https://blueimp.net/">Sebastian Tschan</a> sowie <a href="http://getbootstrap.com/examples/jumbotron-narrow/">Narrow Jumbotron</a> von <a href="http://getbootstrap.com/">Bootstrap</a>.</p>
    </div>

</div> <!-- /container -->

    <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
        <div class="slides"></div>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
<!-- jQuery, Bootstrap, Mosaic & Blueimp JS -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.blueimp-gallery.min.js"></script>
<script src="js/jquery.mosaicflow.min.js"></script>

<!-- Custom JS -->
<script type="text/javascript">
    $(function () {
        'use strict';
        blueimp.Gallery(carouselLinks, {
            container: '#blueimp-image-carousel',
            carousel: true
        });
    });
</script>
</body> 
</html>
