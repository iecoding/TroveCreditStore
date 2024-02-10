<?php

get_header(); ?>

<div class="bg-white py-10 sm:py-5">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-4xl lg:mx-0">
      <?php
        if (is_archive()) { ?>
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Blog</h2>
          <p class="mt-2 text-lg leading-8 text-gray-600">Bitácora de publicaciones de Fábrica de Velas y Veladoras Cristo Rey.</p>
        <?php
        } elseif (is_search()) { ?>
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Búsqueda: <?php the_title(); ?></h2>
          <p class="mt-2 text-lg leading-8 text-gray-600">Verifica que las palabras estén bien escritas.</p>          
        <?php  
        }
      ?>
    </div>
    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <article class="flex max-w-xl flex-col items-start justify-between">
          <?php the_post_thumbnail(); ?>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h3>
            <?php the_excerpt(); ?>
          </div>
        </article>
      <?php endwhile; else : ?>
          <p><?php esc_html_e( 'No posts found.' ); ?></p>
      <?php endif; ?>
      <!-- Content End -->  
    </div>
  </div>
</div>

<?php get_footer();