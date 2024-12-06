<?php
/*
Template Name: Archive Projects
*/

$args = array (
    'post_type' => 'projet',
    'post_per_page' => -1,
);

$query = new WP_Query($args);
console_log($query);

if ($query->have_posts()) :

$posts = array_reverse($query->posts);
$query->posts = $posts;

get_header();

$counter = 0;

echo '<div class="projects-container">';
echo '<div class="projects-wrapper">';

while ($query->have_posts()) : $query->the_post();
$template_number = ($counter % 4) + 1;

        $template_args = array(
            'img-1' => get_field('project_illu-2'),
            'img-2' => get_field('project_cover'),
            'img-3' => get_field('project_illu-4'),
            'img-4' => get_field('project_illu-5'),
            'img-5' => get_field('project_illu-1'),
            'title' => get_the_title(),
            'url' => get_the_permalink(),
            'counter' => $counter
        );

        get_template_part('components/project-template', $template_number,  $template_args);

        $counter++;

    endwhile;

    wp_reset_postdata();

echo '</div>';
echo '</div>';

endif;

get_footer();
