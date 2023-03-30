<?php get_header() ?>
<div class="p-3 text-center">
    <?php
    if (isset($_GET['catname']) && $_GET['catname']) {
        $categoryName = $_GET['catname'];
    } else {
        $categoryName = "All";
    }
    ?>
    <h2>Tous les articles pour la catégorie : <span class="text-danger"> <?= $categoryName ?> </span></h2>
</div>

<!-- recupere tous les post en fonction de leur categorie parent ( SPORT , CULTURE, etc...) -->

<div class="container p-5">
    <div class="justify-content-center flew-wrap row gap-5 pb-3">
        <?php

        if (isset($_GET['cat']) && $_GET['cat']) {
            $categoryId = $_GET['cat']; // recupere la valeur du parametre cat passé dans l'url
        } else {
            $categoryId = -1;
        }

        $myposts = get_posts(array(
            'posts_per_page' => -1, // affiche tous les post recupere 
            'category' => $categoryId, // Categories des post par rapport a l'id recupere dans l'url
            'category__not_in' => array(16)


        ));

        // var_dump($myposts);

        $myposts = array_filter($myposts, function ($myPost) {
            return $myPost->name != "Evénements";
        });

        if ($myposts) {
            foreach ($myposts as $post) :
                setup_postdata($post); ?>
                <div class="card p-0  rounded-0 " style="width:18em;">
                    <img class="card-img-top rounded-0 " src="<?php the_post_thumbnail_url() ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p>test</p>
                        <p class="card-text"><?php the_excerpt() ?></p>
                        <a href="<?php the_permalink() ?>" class="btn btn-danger rounded-0">Lire plus</a>
                    </div>
                </div>
            <?php
            endforeach;
            wp_reset_postdata();
        } else {
            ?>
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_no386ede.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
            <div class="text-center fw-bold fs-2">Aucun article trouvé</div>
        <?php
        }
        ?>
    </div>
</div>



<?php get_footer() ?>