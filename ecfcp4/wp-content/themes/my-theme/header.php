<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<link rel=" icon" type="image/x-icon" href="http://localhost/ecfcp4/wp-content/uploads/2023/03/Logo-removebg-preview-1.png">
    <?php wp_head() ?>
    <link rel="stylesheet" href="http://localhost/ecfcp4/wp-content/themes/my-theme/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg  bg-light">
        <div class="container-fluid flex-column ">
            <a class="navbar-brand" href="<?= get_home_url() ?>"><img src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/my-theme/assets/images/logonobg.png" alt="" style="width: 200px; height:100px;"></a>

            <button type="button" class="btn btn-danger w-25 mb-3 rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                MENU
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="bg-transparent border-0 modal-content">
                        <div class="modal-body">
                            <div class="" id="navbarSupportedContent">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'header-menu',
                                    "container" => false,
                                    'menu_class' => 'flex-column gap-5 mr-auto navbar-nav text-center',
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>