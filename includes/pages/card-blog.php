<section class="card-blog" style="padding-top: 90px;">
    <div class="container">
        <?php query_posts('post_type=post'); ?>
        <div class="row">


            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-4 col-12 pb-3">
                    <a href="<?php the_permalink(); ?>" class="" data-lightbox="roadtrip" data-title="<?php the_content(); ?>">
                        <div class="content-card-post bgc-white">
                            <img src="<?php the_post_thumbnail_url('portfolio-thumb'); ?>" class="img-fluid" alt="Thumb">
                            <div class="content-text">
                                <?php $categoria = get_the_category()[0]; ?>
                                <p class="<?= $class_color[$categoria->term_id] ?> upper category-style">
                                    <?= $categoria->name ?>
                                </p>

                                <h3 class=""><?php the_title(); ?></h3>
                                <p class=""><?= get_the_excerpt(); ?></p>

                                <p class="pt-sm-30 recent-post-date">
                                    <?php the_time(get_option('date_format')); ?>

                                    | Por
                                    <?php the_author_posts_link() ?>
                                </p>
                            </div>

                        </div>
                    </a>

                </div>
            <?php endwhile; ?>

        </div>
        <?php wp_reset_query(); ?>
    </div>
</section>