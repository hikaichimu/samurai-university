<?php get_header(); ?>

<main>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()): the_post(); ?>
      <h2>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>