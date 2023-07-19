<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OlebagOpt</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+SC:wght@600&display=swap" rel="stylesheet">
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	
	<?php 
        wp_head();
    ?>
	
</head>

<body>
    <header>
        <div class="container">
            <div class="header-wrapper">
                <div class="header-menu">
                    <div class="line-block">
                        <span class="menu-line line1"></span>
                        <span class="menu-line"></span>
                        <span class="menu-line"></span>
                    </div>
                </div>
                <div class="header-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/header_logo.png" alt="header-logo">
                </div>
                <div class="header-feedback">
                    <a href="#">
                        <p class="header-phone"><?php the_field('phone_number') ?></p>
                    </a>
                    <button class="btn header-button">Заказать звонок</button>
                </div>
            </div>
        </div>
    </header>