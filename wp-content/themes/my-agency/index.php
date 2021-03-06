<?php get_header(); ?>
<div class="container">

    <h1 class="page-title"> <?php single_post_title() ?> </h1>

    <div class="page-sidebar">
        <div>
            <div class="news-list">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <article class="news">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?= get_permalink(); ?>" title="<?= esc_attr(get_the_title()); ?>" class="news__image">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            <?php endif; ?>
                            <div class="news__body">
                                <header class="news__header">
                                    <?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) :
                                    ?>
                                        <a class="news__tag" href="<?= get_term_link($categories[0]); ?>"> <?= $categories[0]->name; ?></a>
                                    <?php endif; ?>
                                    <a class="news__title" href="<?= get_permalink(); ?>"><?php the_title(); ?> </a>
                                    <div class="news__date"> <?php the_date(); ?></div>
                                </header>
                                <p class="news__content">
                                    <?php the_excerpt(); ?>
                                </p>
                                <a href="<?= get_permalink(); ?> " class="news__action">
                                    Lire la suite
                                    <svg class="icon">
                                        <use xlink:href="sprite.14d9fd56.svg#arrow"></use>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>

                    <div class="pagination">
                        <?= paginate_links(); ?>
                    </div>


                <?php else : ?>
                    <h2> <?= __('No posts found', 'agencye'); ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <aside class="sidebar">
            <div class="sidebar__widget">
                <div class="sidebar__title">Recherche</div>
                <form action="#" class="form-group form-search">
                    <input type="search" placeholder="Rechercher une actualité">
                    <button type="submit">
                        <svg class="icon">
                            <use xlink:href="sprite.14d9fd56.svg#search"></use>
                        </svg>
                    </button>
                </form>
            </div>

            <div class="sidebar__widget">
                <h4 class="sidebar__title">Dernières actualités</h4>
                <ul class="sidebar__list">

                    <li><a href="single.html">Maison 4 pièce(s) - 10m²</a></li>

                    <li><a href="single.html">Maison 4 pièce(s) - 20m²</a></li>

                    <li><a href="single.html">Maison 4 pièce(s) - 30m²</a></li>

                    <li><a href="single.html">Maison 4 pièce(s) - 40m²</a></li>

                </ul>
            </div>

            <div class="sidebar__widget">
                <h4 class="sidebar__title">Dernières actualités</h4>
                <ul class="sidebar__list">

                    <li><a href="single.html">Maison 4 pièce(s) - 10m²</a></li>

                    <li><a href="single.html">Maison 4 pièce(s) - 20m²</a></li>

                    <li><a href="single.html">Maison 4 pièce(s) - 30m²</a></li>

                    <li><a href="single.html">Maison 4 pièce(s) - 40m²</a></li>

                </ul>
            </div>

        </aside>

    </div>
</div>

<?php get_footer(); ?>