<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Joey Fasano</title>
    <!-- bulma cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Julius+Sans+One" rel="stylesheet">
 
   
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

    <!-- font awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <?php wp_head() ?>

</head>
<body <?php body_class(); ?>>

  
<!-- navbar -->
<nav class="navbar is-fixed-top navbar-fixed-top">
        <div class="navbar-brand">
            <div class="navbar-item">
                <a class="scroll" href="#hero"><i class="fas fa-angle-up fa-2x"></i></a>
            </div>

            <a role="button" id="nav-toggle" class="navbar-burger nav-toggle" aria-label="menu" aria-expanded="false" data-target="navbar-hamburger">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>

            </a>
        </div>
        <div class="navbar-menu" id="navbar-hamburger">
            <div class="navbar-start">
            </div>
            <div class="navbar-end">
                <a href="#about" class="navbar-item scroll effect-2">About</a>
                <a href="#projects" class="navbar-item scroll effect-2">Projects</a>
                <a href="#skills" class="navbar-item scroll effect-2">Skills</a>
                <a href="#contact" class="navbar-item scroll effect-2">Contact</a>
            </div>
        </div>
    </nav>
