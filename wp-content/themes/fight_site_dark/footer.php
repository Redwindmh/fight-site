<?php wp_head(); ?>
<?php wp_footer(); ?>


<footer>
    <section class="footer-banner">
        <div class="justify-content-between">
            <p>Fight-site</p>
            <div class="sns-icons">
                <i class="fa fa-facebook-square"></i>
                <i class="fa fa-twitter"></i>
            </div>
        </div>
        <div>
            <ul>
                <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
                <li><a href="<?php echo site_url('/news'); ?>">News</a></li>
                <li><a href="<?php echo site_url('/fighter-profiles'); ?>">Fighters</a></li>
                <li><a href="<?php echo site_url('/gyms'); ?>">Gyms</a></li>
                <li><a href="<?php echo site_url('/events'); ?>">Events</a></li>
                <li><a href="<?php echo site_url('/fighter-submission'); ?>">Fighter Submission</a></li>
                <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </section>
</footer>

</body>

</html>