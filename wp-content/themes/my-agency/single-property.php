<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <div class="container">
        <header class="bien-header">
            <div>
                <h1 class="bien__title"><?php the_title(); ?> - <?= the_field('surface'); ?>m²</h1>
                <div class="bien__meta">
                    <div class="bien__location"><?= agence_city() ?></div>
                    <div class="bien__price">
                        <?php if (get_field('property_category') === 'buy') : ?>
                            <?= sprintf('%s €', get_field('prix')); ?>
                        <?php else : ?>
                            <?= sprintf('%s €/mois', get_field('prix')); ?>
                        <?php endif ?>
                    </div>
                </div>
                <div class="bien__actions" id="bien-actions">
                    <button class="btn btn-filled" id="bien-contact">Contacter l'agence</button>
                    <button class="btn">Appeler</button>
                </div>
                <div class="hidden" id="bien-form">
                    <?= do_shortcode('[contact-form-7 id="117" title="" html_class="bien__form form-2column"]'); ?>
                </div>
            </div>
            <div>
                <div class="bien__photos js-slider">
                    <?php foreach (get_attached_media('image', get_post()) as $image) : ?>
                        var_dump($image);
                        <a href="<?= wp_get_attachment_url($image->ID) ?>">
                            <img class="bien__photo" src="<?= wp_get_attachment_image_url($image->ID, 'property-carousel'); ?>" alt="">
                        </a>
                    <?php endforeach ?>
                </div>
            </div>
        </header>

        <div class="bien-body">
            <h2 class="bien-body__title"><?= __('Description', 'agencya'); ?></h2>
            <div class="formatted">
                <?php the_content(); ?>
            </div>
        </div>

        <section class="bien-options">
            <div class="bien-option">
                <img src="<?= get_template_directory_uri() ?>/assets/area.78237e19.svg" alt="">
                <?= __('Surface', 'agencia') ?> <?php the_field('surface') ?>m²
            </div>
            <div class="bien-option">
                <img src="<?= get_template_directory_uri() ?>/assets/rooms.b02e3d15.svg" alt="">
                <?= __('Chambres', 'agencia') ?>: <?php the_field('chambres'); ?>
            </div>
            <div class="bien-option">
                <img src="<?= get_template_directory_uri() ?>/assets/elevator.e0bdbd67.svg" alt="">
                <?= __('Etage', 'floor') ?>: <?php the_field('etage') ?>
            </div>
            <?php $options = get_the_terms(get_post(), 'property_option'); ?>
            <?php //var_dump($options); 
            ?>
            <?php foreach ($options as $option) : ?>
                <div class="bien-option"><img src="<?= get_template_directory_uri() ?>/icons/<?= $option->slug ?>.svg" alt="">
                    <?= $option->name; ?>
                </div>
            <?php endforeach; ?>
        </section>

    </div>
<?php endwhile; ?>
<?php get_footer(); ?>