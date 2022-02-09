<?php
get_header();
wp_head();
?>
<section class="top-carousel">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"
                    src="<?php echo get_theme_file_uri("./assets/images/What-Is-Bare-Knuckle-Boxing-BKB (2).jpg"); ?>"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="<?php echo get_theme_file_uri("./assets/images/3061157-HSC00001-7.jpg"); ?>"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_theme_file_uri("./assets/images/AkiraVF5US.jpg"); ?>"
                    alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>
</section>

<?php get_footer(); ?>