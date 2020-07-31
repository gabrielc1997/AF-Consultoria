<section class="post" style="padding-top: 90px;">
    <div class="container">

        <div class="row">


            <?php while (have_posts()) : the_post(); ?>
                <div class="col-12">

                    <img src="<?php the_post_thumbnail_url('portfolio-thumb'); ?>" class="img-fluid" alt="Thumb">

                    <h1 class="text-center"><?php the_title(); ?></h1>

                    <p class="text-center"><?php the_content(); ?></p>

                    </a>
                    <div class="overlay"></div>


                </div>
            <?php endwhile; ?>

        </div>

    </div>
</section>




