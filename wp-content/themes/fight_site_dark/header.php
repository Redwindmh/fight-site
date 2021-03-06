<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/jquery.js'; ?>">
    </script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/jquery-ui.min.js'; ?>">
    </script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/bootstrap.js'; ?>">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <?php wp_head(); ?>

</head>

<body>
    <section class="header">
        <div class="header-banner">
            <div class="header-title">
                <a href="<?php echo site_url('/'); ?>">Fight-site</a>
            </div>
        </div>
        <div class="menu-bar">
            <ul>
                <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
                <li><a href="<?php echo site_url('/news'); ?>">News</a></li>
                <li><a href="<?php echo site_url('/fighter-profiles'); ?>">Fighters</a></li>
                <li><a href="<?php echo site_url('/gyms'); ?>">Gyms</a></li>
                <li><a href="<?php echo site_url('/events'); ?>">Events</a></li>
                <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
            </ul>
        </div>
    </section>