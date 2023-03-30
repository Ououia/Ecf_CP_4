<?php get_header() ?>


<!-- Permet d'afficher un confirmation differente en fonction de l'id de l'evenement -->
<?php

$postId = $_GET['postID']; //recupere postID dans l'url


$mypost = get_post($postId);

?>
<div class="d-flex flex-column align-items-center" style="margin-bottom: 16rem!important;">
    <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_JEo4aLm4z5.json" background="transparent" speed="1" style="width: 300px; height: 300px;margin-top:5rem;" autoplay></lottie-player>
    <div class="fs-3 mb-2">Votre participation à l'evenement : <span class="text-danger"> <?= $mypost->post_title ?> </span>a été prise en compte</div>
    <div class="mb-5"> Cette evenement est prevu pour le <span class="text-danger"> <?= $mypost->post_date ?> </span></div>
</div>


<?php get_footer() ?>