<?php

if (have_posts()) :
    while (have_posts()) : the_post();
    $excerpt = get_field('project_excerpt');
    $cover = get_field('project_cover');
    $challenge = get_field('project_challenge');
    $progress = get_field('project_progress');
    $result = get_field('project_result');
    $theme = get_field('project_theme');
    $year = get_field('project_year');
    $transition = get_field('project_transition');
    $url = get_field('url') ? get_field('url') : "";

    $illu_list_1 = [];
    $illu_list_2 = [];
    $illu_1 = get_field('project_illu-1');
    $illu_2 = get_field('project_illu-2');
    $illu_3 = get_field('project_illu-3');
    $illu_4 = get_field('project_illu-4');
    $illu_5 = get_field('project_illu-5');
    $illu_6 = get_field('project_illu-6') ? get_field('project_illu-6') : null;
    $illu_7 = get_field('project_illu-7') ? get_field('project_illu-7') : null;
    $illu_8 = get_field('project_illu-8') ? get_field('project_illu-8') : null;
    $illu_9 = get_field('project_illu-9') ? get_field('project_illu-9') : null;
    $illu_10 = get_field('project_illu-10') ? get_field('project_illu-10') : null;
    array_push($illu_list_1, $illu_1, $illu_2, $illu_3, $illu_4);
    if($illu_6 != null) {
        array_push($illu_list_2, $illu_5, $illu_6, $illu_7, $illu_8, $illu_9, $illu_10);
    } else {
        array_push($illu_list_2, $illu_5);
    }


get_header();
?>

<div class="project-wrapper">
    <div class="project-hero">
        <div class="project-hero-header">
            <h2 class="hidden-to-bottom"><?php the_title();?></h2>
            <p class="hidden-to-top"><?php echo esc_html($excerpt);?></p>
        </div>
        <?php
        get_template_part('components/button', null, array(
            'url' => '#project-cover',
            'text' => 'Découvrir',
            'class' => 'hidden-to-top'
        ));
        ?>
    </div>

    <div class="project-cover" id="project-cover">
        <img src="<?php echo esc_url($cover);?>" alt="Project illustration">
    </div>

    <div class="project-section">
        <div class="project-section-left project-section-left-1">
            <div>
                <h5 class="hidden-to-right-slow">Le défi</h5>
                <p class="hidden-to-right-slow"><?php echo esc_html($challenge);?></p>
            </div>
            <div>
                <h5 class="hidden-to-right-slow">Le déroulement</h5>
                <p class="hidden-to-right-slow"><?php echo esc_html($progress);?></p>
            </div>
        </div>
        <div class="project-section-right">
            <span>
                <h5>
                    Thème
                </h5>
                <span><?php echo esc_html($theme);?></span>
            </span>
            <span>
                <h5>
                    Année
                </h5>
                <span><?php echo esc_html($year);?></span>
            </span>
            <span>
                <h5>
                    Compétences
                </h5>
                <?php
                $taxonomies = get_object_taxonomies('projet', 'objects');
                foreach ($taxonomies as $taxonomy) {
                    $terms = get_the_terms(get_the_ID(), $taxonomy->name);
                    if ($terms && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                            echo '<span>'. esc_html($term->name) .'</span>';
                        }
                    }
                }
                ?>
            </span>
        </div>
    </div>

    <div class="project-transition">
        <img src="<?php echo esc_url($transition);?>" alt="Project illustration">
    </div>

    <div class="project-section">
    <div class="project-section-left">
            <div>
                <h5 class="hidden-to-right-slow">Le résultat</h5>
                <p class="hidden-to-right-slow"><?php echo esc_html($result);?></p>
            <?php
            if($url) :
            ?>
            <span class="project-url">
                <h5 class="hidden-to-right-slow">
                    <a class="footer-links" href="<?php echo esc_url($url);?>">Lien vers le site</a>
                </h5>
            </span>
            <?php
            endif;
            ?>
            </div>
        </div>
    </div>

    <div class="project-grid-wrapper">
        <div class="project-grid project-grid-1">
            <?php
            foreach ($illu_list_1 as $illu) {
                echo '<img class="hidden-to-grow" src="'. esc_url($illu) .'" alt="image">';
            }
            ?>
        </div>
        <?php
        if($illu_6 != null) :
        ?>
        <div class="project-grid project-grid-2">
            <?php
            foreach ($illu_list_2 as $illu) {
                echo '<img class="hidden-to-grow" src="'. esc_url($illu) .'" alt="image">';
            }
            ?>
        </div>
        <?php
        else :
        ?>
        <div class="project-grid-2bis">
            <?php
            foreach ($illu_list_2 as $illu) {
                echo '<img class="hidden-to-grow" src="'. esc_url($illu) .'" alt="image">';
            }
            ?>
        </div>
        <?php
        endif;
        ?>
    </div>

    <div class="cta project-cta">
        <?php
        get_template_part('components/button', null, array(
            'url' => esc_url(home_url()) . '/projects',
        'text' => 'Retourner aux projets'
        ));
        ?>
    </div>
</div>
<?php
endwhile;
endif;
get_footer();
