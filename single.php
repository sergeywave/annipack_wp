<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<main class="container single-wrap">
    <article class="article">
        <div class="container article__container">
            <div class="article__head">
                <a href="<?php echo get_category_link(current_pos_cat('id')); ?>" class="cat-label"><?php echo current_pos_cat('name'); ?></a>
                <h1 class="article__title"><?php the_title(); ?></h1>
                <div class="article__head-meta">
                    <span class="card-date"><?php the_time() ?></span>
                    <span class="article__views">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.61342 8.47546C1.52262 8.3317 1.47723 8.25982 1.45182 8.14895C1.43273 8.06567 1.43273 7.93434 1.45182 7.85106C1.47723 7.74019 1.52262 7.66831 1.61341 7.52455C2.36369 6.33656 4.59693 3.33334 8.00027 3.33334C11.4036 3.33334 13.6369 6.33656 14.3871 7.52455C14.4779 7.66831 14.5233 7.74019 14.5487 7.85106C14.5678 7.93434 14.5678 8.06567 14.5487 8.14895C14.5233 8.25982 14.4779 8.3317 14.3871 8.47545C13.6369 9.66344 11.4036 12.6667 8.00027 12.6667C4.59693 12.6667 2.36369 9.66344 1.61342 8.47546Z" stroke="#515161" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.00027 10C9.10484 10 10.0003 9.10457 10.0003 8C10.0003 6.89543 9.10484 6 8.00027 6C6.8957 6 6.00027 6.89543 6.00027 8C6.00027 9.10457 6.8957 10 8.00027 10Z" stroke="#515161" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <?php echo get_post_views(get_the_ID()); ?>
                    </span>
                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="article__author"><?php the_author(); ?></a>
                </div>
            </div>

            <div class="article__body">

                <?php
                // Получаем объект поста
                global $post;

                // Получаем URL изображения записи в полном размере
                $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');

                // Проверяем, есть ли изображение записи
                if ($full_image_url) {
                    echo '<img src="' . esc_url($full_image_url[0]) . '" alt="' . esc_attr(get_the_title()) . '" class="full-size-thumbnail article-thumbnail" />';
                }

                // Выводим содержимое записи
                the_content();
                ?>


            </div>

            <div class="article__bottom">
                <a href="" onclick="VKShare()" class="btn-share btn-share_vk">
                    <svg width="22" height="13" viewBox="0 0 22 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.2891 1.10938C20.9766 2.4375 18.1641 6.42188 18.1641 6.42188C17.9297 6.8125 17.8125 7.00781 18.1641 7.4375C18.3203 7.63281 21.25 10.4453 21.6797 11.7734C21.875 12.4375 21.5625 12.75 20.8984 12.75H18.5938C17.7344 12.75 17.4609 12.0859 15.8984 10.5234C14.5312 9.19531 13.9453 9 13.5938 9C12.8906 9 13.0078 9.27344 13.0078 11.8906C13.0078 12.4375 12.8125 12.75 11.3672 12.75C8.94531 12.75 6.25 11.3047 4.33594 8.57031C1.48438 4.54688 0.703125 1.53906 0.703125 0.914062C0.703125 0.5625 0.859375 0.25 1.48438 0.25H3.78906C4.375 0.25 4.60938 0.523438 4.84375 1.14844C5.97656 4.42969 7.85156 7.32031 8.63281 7.32031C8.94531 7.32031 9.0625 7.16406 9.0625 6.42188V3.02344C8.98438 1.46094 8.16406 1.34375 8.16406 0.796875C8.16406 0.523438 8.35938 0.25 8.75 0.25H12.3438C12.8516 0.25 13.0078 0.523438 13.0078 1.10938V5.67969C13.0078 6.14844 13.2422 6.34375 13.3594 6.34375C13.6719 6.34375 13.9062 6.14844 14.4531 5.64062C16.0938 3.76562 17.2656 0.914062 17.2656 0.914062C17.4219 0.5625 17.6953 0.25 18.2812 0.25H20.5859C21.2891 0.25 21.4062 0.640625 21.2891 1.10938Z" fill="#0077FF" />
                    </svg>
                    Поделиться
                </a>
                <a href="" onclick="TGShare()" class="btn-share btn-share_tg">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.6875 0.8125C15.0391 0.8125 19.375 5.14844 19.375 10.5C19.375 15.8516 15.0391 20.1875 9.6875 20.1875C4.33594 20.1875 0 15.8516 0 10.5C0 5.14844 4.33594 0.8125 9.6875 0.8125ZM14.4141 7.45312C14.5703 6.82812 14.1797 6.55469 13.75 6.71094L4.41406 10.3047C3.78906 10.5391 3.78906 10.9297 4.29688 11.0859L6.67969 11.8281L12.2266 8.3125C12.5 8.15625 12.7344 8.27344 12.5391 8.42969L8.04688 12.4922L7.89062 14.9531C8.125 14.9531 8.24219 14.8359 8.35938 14.7188L9.53125 13.5859L11.9531 15.3828C12.4219 15.6172 12.7344 15.5 12.8516 14.9531L14.4141 7.45312Z" fill="#29A9EA" />
                    </svg>
                    Поделиться
                </a>

                <span id="copy" data-href="<?php the_permalink() ?>" class="btn-copy-link">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5893 15.3034L9.4108 16.4819C7.78361 18.1091 5.14542 18.1091 3.51824 16.4819C1.89106 14.8547 1.89106 12.2165 3.51824 10.5893L4.69675 9.4108M15.3034 10.5893L16.4819 9.4108C18.109 7.78361 18.109 5.14542 16.4819 3.51824C14.8547 1.89106 12.2165 1.89106 10.5893 3.51824L9.4108 4.69675M7.08339 12.9167L12.9167 7.08337" stroke="#030303" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <div class="btn-copy-link__text">Копировать ссылку</div>
                </span>

            </div>

            <?php get_template_part('template-parts/article__similar') ?>

        </div>
    </article>


    <aside class="sidebar">

        <?php get_sidebar() ?>

    </aside>
</main>

<section class="partners-news">
    <div class="container partners-news__container">
        <h3 class="partners-news__title">Новости партнёров</h3>
        <div>

        </div>
    </div>
</section>

<section class="vk-comments">
    <div class="container vk-comments__container">
        <div>

        </div>
    </div>
</section>


<?php endwhile; else : ?>
      <p><?php _e( 'Статей нет' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>