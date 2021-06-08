<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
    <progress style="z-index: 1050;" max="100" value="0"></progress>
    <div class="mmaker-loader"></div>
    <header class="mmaker-header mmaker-landing-header">
            <!-- nav -->
            <nav class="navbar navbar-expand-lg justify-content-between fixed-top bg-white">
                    <?php if(function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                <button class="navbar-toggler d-lg-none pr-4 pt-3" type="button" data-toggle="collapse" data-target="#mmakerMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon d-flex flex-row mr-4"><img src="/wp-content/uploads/svg/icone/freccia.svg" height="20px" width="auto" style="transform: rotate(135deg)" class="mr-2"> menu</span>
                </button>
                <div class="collapse navbar-collapse" id="mmakerMainNav">
                    <?php wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-capitalize">%3$s</ul>'
                        )
                        );
                    ?>                                      
                </div>
            </nav><!-- fine nav -->
    </header>