<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RWD competetions test <?php wp_title() ?></title>
    <meta name="description" content="Testowa strona, która pokazuje moc technologii RWD">
    <meta name="keywords" content="rwd, responsywnosc, strony internetowe">

    <meta property="og:title" content="Technologia RWD">
    <meta property="og:description" content="Testowa strona, która pokazuje moc technologii RWD">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/header.jpg">


    <?php wp_head(); ?>

</head>

<body>


    <nav class="nav">
        <div class="logo">
        <a href=''><?php the_custom_logo(); ?></a>
        </div>
        <ul class="navList">
            <li class="navItem"><a href="#features" class="navLink">Features</a></li>
            <li class="navItem"><a href="#about" class="navLink">About us</a></li>
            <li class="navItem"><a href="#pricing" class="navLink">Pricing</a></li>
            <li class="navItem"><a href="#contact" class="navLink">Contact</a></li>
        </ul>
    </nav>

    <div class="mobile">
        <input type="checkbox" class="mobileCheckbox" id='hamburger'>
        <label for="hamburger" class="mobileButton"><span class="mobileButtonHam">&#9781;</span></label>

        <nav class="mobileNav">
            <ul class="mobileNavList">
                <li class="mobileNavItem"><a href="#features" class="mobileNavLink">Features</a></li>
                <li class="mobileNavItem"><a href="#about" class="mobileNavLink">About us</a></li>
                <li class="mobileNavItem"><a href="#pricing" class="mobileNavLink">Pricing</a></li>
                <li class="mobileNavItem"><a href="#contact" class="mobileNavLink">Contact</a></li>
            </ul>
        </nav>
    </div>
