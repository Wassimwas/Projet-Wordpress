<?php get_header(); ?>

<?php
$cities = get_terms([
    'taxonomy' => 'property_city'
]);
$types = get_terms([
    'taxonomy' => 'property_type'
]);

$currentCity = get_query_var('city');
$currentPrice = get_query_var('price');
$currentType = get_query_var('property_type');
$currentRooms = get_query_var('rooms');

?>

<div class="container page-properties">
    <div class="search-form">
        <h1 class="search-form__title"> Tous nos biens </h1>
        <p>Retrouver tous nos biens sur le secteur de <strong>France</strong></p>
        <hr>
        <form action="" class="search-form__form">
            <div class="search-form__checkbox">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" checked="" type="radio" name="type" id="buy" value="buy">
                    <label class="form-check-label" for="buy">Acheter</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="rent" value="rent">
                    <label class="form-check-label" for="rent">Louer</label>
                </div>
            </div>
            <div class="form-group">
                <select name="city" id="city" class="form-control">
                    <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city->slug ?>" <?php selected($city->slug, $currentCity) ?>><?= $city->name ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="city"><?= __('Ville', 'agencya') ?></label>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="budget" placeholder="100 000 €" name="price" value="<?= esc_attr($currentPrice) ?>">
                <label for="budget"><?= __('Budget', 'agencya') ?></label>
            </div>
            <div class="form-group">
                <select name="kind" id="kind" class="form-control">
                    <option value="flat">Appartement</option>
                    <option value="villa">Villa</option>
                </select>
                <label for="kind">Type</label>
            </div>
            <div class="form-group">
                <input type="number" name="rooms" class="form-control" id="rooms" value="<?= esc_attr($currentRooms) ?>">
                <label for="rooms"><?= __('Piéces', 'agencya') ?></label>
            </div>
            <button type="submit" class="btn btn-filled">Rechercher</button>
        </form>
    </div>

    <?php $i = 0;
    while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/property') ?>
    <?php $i++;
    endwhile; ?>

</div>

<div class="pagination">
    <a href="#" class="btn">Voir plus de biens +</a>
</div>


<?php get_footer(); ?>