<?php if (!have_posts()) : ?>
  <div class="alert alert-block fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <p><?php _e('Sorry, no results were found.', 'roots'); ?></p>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" class="article">
    <header class="article-header">
        <h3 class="article-title">
            <a class="article-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
    </header>
    <time class="article-date"><?php the_date(); ?></time>
    <div class="article-body">
        <?php the_content(); ?>
    </div>
    <div class="article-comments">
        <?php comments_template(); ?>
    </div>
</article>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav id="post-nav" class="pager">
    <div class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></div>
    <div class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></div>
  </nav>
<?php endif; ?>
