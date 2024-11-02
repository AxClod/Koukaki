<div class="swiper fadeIn">
    <div class="swiper-wrapper">
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',
        );
        $characters_query = new WP_Query($args);
        
        if ($characters_query->have_posts()) :
            while ($characters_query->have_posts()) : $characters_query->the_post();
                ?>
                <div class="swiper-slide">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                    <figcaption><?php the_title(); ?></figcaption>
                </div>
                <?php
            endwhile;
            wp_reset_postdata(); // Remettre les données de requête par défaut
        endif;
        ?>
    </div>
</div>