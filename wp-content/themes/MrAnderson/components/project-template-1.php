<div class="projects-grid projects-grid-1">
    <img class="projects-grid-img projects-grid-1-img-1 hidden-to-right" src="<?php echo esc_url($args['img-1']); ?>" alt="">
    <img class="projects-grid-img projects-grid-1-img-2 hidden-to-left" src="<?php echo esc_url($args['img-2']); ?>" alt="">
    <img class="projects-grid-img projects-grid-1-img-3 hidden-to-top" src="<?php echo esc_url($args['img-3']); ?>" alt="">
    <img class="projects-grid-img projects-grid-1-img-4 hidden-to-grow" src="<?php echo esc_url($args['img-4']); ?>" alt="">
    <img class="projects-grid-img projects-grid-1-img-5 hidden-to-grow" src="<?php echo esc_url($args['img-5']); ?>" alt="">
    <a href="<?php echo esc_url($args['url']); ?>" class="projects-grid-1-title projects-grid-title hidden-to-top"><?php echo esc_html($args['title']); ?></a>

    <span class="projects-grid-border projects-grid-1-border-1"></span>
    <span class="projects-grid-border projects-grid-1-border-2"></span>
    <span class="projects-grid-border projects-grid-1-border-3"></span>
    <span class="projects-grid-border projects-grid-1-border-4"></span>
    <span class="projects-grid-border projects-grid-1-border-5"></span>
    <span class="projects-grid-border projects-grid-1-border-6"></span>

    <?php
    if(intval($args['counter']) == 0) :
        console_log('counter');
        console_log(intval($args['counter']));
        echo '<span class="projects-grid-header projects-grid-header-1 hidden-to-left">MES</span>';
        echo '<span class="projects-grid-header projects-grid-header-2 hidden-to-right">PROJETS</span>';
    endif;
    ?>
</div>
