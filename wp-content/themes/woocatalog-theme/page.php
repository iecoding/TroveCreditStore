<?php

get_header(); ?>
<main><!-- needs to be here because flex vertical 3 elements to fix footer bottom issue -->
    <div class="bg-white py-10 sm:py-5">
        <article class="mx-auto max-w-7xl px-6 lg:px-8 prose">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl text-center"><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'No posts found.' ); ?></p>
            <?php endif; ?>
            <!-- Content End -->  
        </article>
    </div>
</main><!-- adding more elements will broke the Markup -->
<?php get_footer();