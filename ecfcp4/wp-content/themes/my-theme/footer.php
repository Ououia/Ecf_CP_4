<footer class="bg-body-secondary">
    <div class="d-flex flex-column flex-md-row gap-5 justify-content-between p-5">
        <div class="d-md-flex gap-5">
            <a class="navbar-brand" href="<?= get_home_url() ?>"><img src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/my-theme/assets/images/logonobg.png" alt="logo le pays" class="d-none d-md-block" style="width: 200px; height:100px;"></a>
            <div class="d-flex flex-column gap-5">
                <a href="<?php echo esc_url(home_url('/')); ?>/article" class="text-dark text-center text-decoration-none text-uppercase  fs-5">Articles</a>
                <a href="<?php echo esc_url(home_url('/')); ?>/evenement" class="text-dark text-center text-decoration-none text-uppercase fs-5">évenements</a>
            </div>
        </div>
        <div>
            <h2 class="text-center">SUIVRE <span class="text-danger">LE PAYS</span> SUR</h2>
            <div class="d-flex gap-5 justify-content-evenly mt-3">
                <a href=""><img src="http://localhost/ecfcp4/wp-content/themes/my-theme/assets/images/twitter.png" alt="" style="width:30px;height:30px"></a>
                <a href=""><img src="http://localhost/ecfcp4/wp-content/themes/my-theme/assets/images/facebook.png" alt="" style="width:30px;height:30px"></a>
                <a href=""><img src="http://localhost/ecfcp4/wp-content/themes/my-theme/assets/images/linkedin.png" alt="" style="width:30px;height:30px"></a>
                <a href=""><img src="http://localhost/ecfcp4/wp-content/themes/my-theme/assets/images/instagram.png" alt="" style="width:30px;height:30px"></a>
            </div>
        </div>
    </div>
</footer>
<div class="baby-footer bg-danger text-center">
    <?php wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        "container" => false,
        "menu_class" => "m-0 p-0"
    ));
    ?>
</div>
<?php wp_footer() ?>

</body>

</html>