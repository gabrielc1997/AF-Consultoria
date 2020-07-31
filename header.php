<!doctype html>
<html lang="en">

<head>
    <title><?php bloginfo('name');
            echo " | ";
            bloginfo('description'); ?></title>
    <link rel="icon" type="imagem/png" href="./assets/images/Logo-2.png" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d1b9168dae.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!--Get your own code at fontawesome.com-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/<?php echo $slick; ?>.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/<?php echo $style; ?>.css">



</head>

<body <?php body_class() ?>>

    <!--top header-->
    <header class="position-fixed bgc-opacity-white w-100" style="z-index: 3;">


        <nav id="menu" class="navbar  navbar-expand-lg navbar-light top-navbar" data-toggle="sticky-onscroll">
            <div class="container">
                <a class="navbar-brand" href="#">

                    <img src="<?php bloginfo('template_url') ?>/assets/images/Logo-2.png" alt="" class="" id="logo2" style="width: 48px;">
                </a>
                <button class="navbar-toggler" type="button" id="abre-menu" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div id="" class="container" onclick="myFunction(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'header-menu',
                                'items_wrap'  => '<ul class="navbar-nav pull-right">%3$s</ul>',
                            )

                        ); ?>


                </div>
            </div>
        </nav>


    </header>