<?php get_header(); ?>

<main style="opacity: 1;">
    <div class="container">
        <h2>最新の記事</h2>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>投稿がありません。</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
