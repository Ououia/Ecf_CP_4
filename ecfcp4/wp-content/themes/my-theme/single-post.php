<?php get_header() ?>


<!-- Page qui affiche l'article et sont contenu -->
<?php
if (have_posts()) : ?>
    <div class="row"> <a class="text-center my-5 fs-5  text-decoration-none" style=" color: red;" href="<?= get_post_type_archive_link('post') ?>">Voir les dernieres actualités</a> </div>
    <?php while (have_posts()) :
        the_post(); ?>
        <div class="d-flex flex-column align-items-center gap-3">
            <h2 class="card-title"><?php the_title() ?></h2>
            <img class="card-img-top w-50 h-50" src="<?php the_post_thumbnail_url() ?>" alt="Card image cap">

            <p class="card-text"> <?php the_content() ?></p>

        </div>

    <?php endwhile; ?>

<?php else :
    echo '<p>Aucun article trouvé</p>';
endif;
?>

<?php the_post_navigation(array(
    'prev_text'  => __('← %title'),
    'next_text'  => __('%title →'),
    'in_same_term' => true,
    'taxonomy' => __('category'),
    'excluded_terms' => array(16),
));
?>


<?php get_footer() ?>