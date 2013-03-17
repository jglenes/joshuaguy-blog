<?php

// Posts Template Section

$postsQueryArgs = array(
    'post-type' => 'post'
);

$postsQuery = new WP_Query( $postsQueryArgs );

?>

<ul class="article-list">
    <?php while( $postsQuery->have_posts() ): $postsQuery->the_post(); ?>
        <li>
            <article class="article">
                <header class="article-header">
                    <h2 class="article-title">
                        <a class="article-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                </header>
                <time class="article-date"><?php the_date(); ?></time>
            </article>
        </li>
    <?php endwhile; // $postsQuery ?>
</ul> <!-- /.article-list -->
