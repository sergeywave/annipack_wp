<?php get_header();
$queried_object = get_queried_object();
$term_id = $queried_object->term_id;

if (is_author()){
    $author = get_queried_object();
    $author_id = $queried_object->ID;
}
?>

<section class="category" data-category-id="<?php echo $term_id; ?>" >
    <div class="container category__container">
        <h1 class="block-title popular__block-title"><?php echo get_the_archive_title(); ?></h1>
        <div class="category__wrap">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php get_template_part('template-parts/news-card') ?>

                <?php endwhile;
            else : ?>
                <p><?php _e('Ничего нет'); ?></p>
            <?php endif; ?>


        </div>

        <?php

        $show_featured_posts = get_theme_mod('show_featured_posts', false);

        global $wp_query;
        if (1 < $wp_query->max_num_pages) { ?>
            <?php if ($show_featured_posts) : ?>

                <img class="loader" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-loader.svg" alt="">

            <?php else : ?>

                    <button class="btn load-more-btn">Показать еще</button>

            <?php endif; ?>
        <?php } ?>
    </div>
</section>

<?php get_footer(); ?>