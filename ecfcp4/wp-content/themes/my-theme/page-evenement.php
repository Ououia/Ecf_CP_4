<?php get_header() ?>

<?php get_header() ?>
<div class="p-3 text-center">
    <h2>Tous les évènement à venir</h2>
</div>
<div class="container p-5 ">
    <div class="justify-content-center  flew-wrap row gap-5 pb-3">
        <?php



        $myposts = get_posts(array(
            'posts_per_page' => -1,
            'category' => 16

        ));


        if ($myposts) {
            foreach ($myposts as $post) :
                setup_postdata($post); ?>
                <div class="card p-0  rounded-0 cardevent">
                    <img class="card-img-top rounded-0 " src="<?php the_post_thumbnail_url() ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center fs-2"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_date() ?></p>
                        <a href="<?php echo esc_url(home_url('/')); ?>/confirmation-evenement?postID=<?= $post->ID ?>" class="btn btn-danger rounded-0">Participer</a>
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


<?php get_footer() ?>