<?php get_header() ?>


<?php

// recupere toutes les categories parents

$allcategories = get_categories(array(
    'hide_empty' => 0,
    'parent' => 0
));

$allcategories = array_filter($allcategories, function ($category) {
    return $category->name != "Evénements";
});

$categories = array_reverse($allcategories);


?>

<!-- boucle sur les categories parents -->

<?php foreach ($categories as $category) : ?>



    <div class="w-100  bg-danger">
        <a class="text-decoration-none" href="<?php echo esc_url(home_url('/')); ?>/article?cat=<?= $category->term_id ?>&catname=<?= $category->cat_name ?>">
            <p class="text-white text-center text-uppercase fs-3  p-2 m-0"><?= $category->name ?></p>
        </a>
    </div>
    <div class="bg-danger d-flex flex-wrap gap-3 justify-content-center mb-3 p-3 w-100 gap-md-5">
        <?php
        $args = array('child_of' => $category->term_id);
        $allcategories = get_categories($args);
        foreach ($allcategories as $allcategory) {
            echo '<div ><a class="text-white fs-5 text-decoration-none " href="' .  esc_url(home_url('/')) . '/article?cat=' . $allcategory->term_taxonomy_id . '&catname=' . $allcategory->name . '" title="' . sprintf(__("View all posts in %s"), $allcategory->name) . '" ' . '>' . $allcategory->name . '</a> </div> ';
            // echo '<p> Description:' . $category->description . '</p>';
            // echo '<p> Post Count: ' . $category->count . '</p>';
        }
        ?>
    </div>


    <!-- Permet de recuperer le post le plus recent pour en faire les post du momment  -->

    <div class="justify-content-center row  pb-3">
        <?php
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 1, // Le nombre de post a afficher
            'post_status' => 'publish', // affiche uniquement les post publié
            'category' => $category->term_id // permet de recuperer la categorie des post a afficher
        ));

        ?>
        <?php
        if (!empty($recent_posts)) : ?>
            <?php foreach ($recent_posts as $post_item) : ?>
                <div class="card toparticlewidth rounded-0   p-0">
                    <a class="card-img-top rounded-0 " href="<?php echo get_permalink($post_item['ID']) ?>">
                        <?php echo get_the_post_thumbnail($post_item['ID'], 'full', array('class' => 'w-100 h-100 rounded-0')); ?>
                    </a>
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title"><?= $post_item['post_title'] ?></h5>
                        <div class="card-text text-center mb-2"><?= wp_trim_words($post_item['post_content'], 50) ?></div>
                        <a href="<?php the_permalink($post_item['ID']) ?>" class="btn btn-danger fs-5 rounded-0">Lire plus</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_no386ede.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
            <div class="text-center fs-6 fs-2">AUCUN ARTICLE POUR LE MOMENT</div>
        <?php endif; ?>
    </div>


    <!-- recupere tous les autres post correspondant a la categories sans le post du momment -->

    <div class="justify-content-center row gap-5 pb-3">
        <?php
        $myposts = get_posts(array(
            'posts_per_page' => 3, // nombre de post a afficher
            'offset'         => 1, // decale les post a afficher pour ne pas afficher le plus recent
            'category' => $category->term_id // recupere la categorie des post a afficher

        ));
        if ($myposts) {
            foreach ($myposts as $post) :
                setup_postdata($post); ?>
                <div class="card p-0 rounded-0" style="width:18em;">
                    <img class="card-img-top rounded-0 " src="<?php the_post_thumbnail_url() ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <div class="card-text"><?php the_excerpt() ?></div>
                        <a href="<?php the_permalink() ?>" class="btn btn-danger fs-6 rounded-0">Lire plus</a>
                    </div>
                </div>
        <?php
            endforeach;
            wp_reset_postdata();
        }
        ?>
    </div>

<?php endforeach ?>


<?php get_footer() ?>