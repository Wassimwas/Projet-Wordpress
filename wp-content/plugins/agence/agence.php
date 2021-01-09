<?php

/**
 * Plugin Name: Agence Plugin
 */
add_action('init', function () {
    register_post_type('property', [
        'label' => __('Property', 'agence'),
        'menu_icon' => 'dashicons-admin-multisite',
        'labels' => [
            'name'                     => __('Property', 'agence'),
            'singular_name'            => __('Property', 'agence'),
            'edit_item'                => __('Edit property', 'agence'),
            'new_item'                => __('New property', 'agence'),
            'view_item'                => __('View property', 'agence'),
            'view_items'                => __('View properties', 'agence'),
            'search_items'                => __('Search properties', 'agence'),
            'not_found'                => __('No properties found.', 'agence'),
            'not_found_in_trash'                => __('No properties found in Trash', 'agence'),
            'all_items'                => __('All properties', 'agence'),
            'archives'                => __('Property archive', 'agence'),
            'attributes'                => __('Property attributes', 'agence'),
            'insert_into_item'         => __('Insert into property', 'agence'),
            'uploaded_to_this_item'    => __('Uploaded to this property', 'agence'),
            'filter_items_list'        => __('Filter properties list', 'agence'),
            'items_list_navigation'    => __('Properties list navigation', 'agence'),
            'items_list'               => __('Properties list', 'agence'),
            'item_published'           => __('Property published.', 'agence'),
            'item_published_privately' => __('Property published privately.', 'agence'),
            'item_reverted_to_draft'   => __('Property reverted to draft.', 'agence'),
            'item_scheduled'           => __('Property scheduled.', 'agence'),
            'item_updated'             => __('Property updated.', 'agence'),
        ],
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'taxonomies' => ['property_type', 'property_city', 'property_option'],
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail']
    ]);
    register_taxonomy('property_type', 'property', [
        'meta_box_cb' => 'post_categories_meta_box',
        'labels' => [
            'name'                       => __('Types', 'agence'),
            'singular_name'              => __('Type', 'agence'),
            'search_items'               => __('Search Types', 'agence'),
            'popular_items'              => __('Popular Types', 'agence'),
            'all_items'                  => __('All Types', 'agence'),
            'edit_item'                  => __('Edit Type', 'agence'),
            'view_item'                  => __('View Type', 'agence'),
            'update_item'                => __('Update Type', 'agence'),
            'add_new_item'               => __('Add New Type'), 'agence',
            'new_item_name'              => __('New Type Name', 'agence'),
            'separate_items_with_commas' => __('Separate Types with commas', 'agence'),
            'add_or_remove_items'        => __('Add or remove Types', 'agence'),
            'choose_from_most_used'      => __('Choose from the most used Types', 'agence'),
            'not_found'                  => __('No Types found.', 'agence'),
            'no_terms'                   => __('No Types', 'agence'),
            'items_list_navigation'      => __('Types list navigation', 'agence'),
            'items_list'                 => __('Types list', 'agence'),
            'back_to_items'              => __('&larr; Back to Types', 'agence'),
        ]
    ]);
    register_taxonomy('property_city', 'property', [
        'meta_box_cb' => 'post_categories_meta_box',
        'labels' => [
            'name'                       => __('Cities', 'agence'),
            'singular_name'              => __('City', 'agence'),
            'search_items'               => __('Search Cities', 'agence'),
            'popular_items'              => __('Popular Cities', 'agence'),
            'all_items'                  => __('All Cities', 'agence'),
            'edit_item'                  => __('Edit City', 'agence'),
            'view_item'                  => __('View City', 'agence'),
            'update_item'                => __('Update City', 'agence'),
            'add_new_item'               => __('Add New City'), 'agence',
            'new_item_name'              => __('New City Name', 'agence'),
            'separate_items_with_commas' => __('Separate Cities with commas', 'agence'),
            'add_or_remove_items'        => __('Add or remove Cities', 'agence'),
            'choose_from_most_used'      => __('Choose from the most used Cities', 'agence'),
            'not_found'                  => __('No Cities found.', 'agence'),
            'no_terms'                   => __('No Cities', 'agence'),
            'items_list_navigation'      => __('Cities list navigation', 'agence'),
            'items_list'                 => __('Cities list', 'agence'),
            'back_to_items'              => __('&larr; Back to Cities', 'agence'),
        ]
    ]);
    register_taxonomy('property_option', 'property', [
        'labels' => [
            'name'                       => __('Options', 'agence'),
            'singular_name'              => __('Option', 'agence'),
            'search_items'               => __('Search Options', 'agence'),
            'popular_items'              => __('Popular Options', 'agence'),
            'all_items'                  => __('All Options', 'agence'),
            'edit_item'                  => __('Edit Option', 'agence'),
            'view_item'                  => __('View Option', 'agence'),
            'update_item'                => __('Update Option', 'agence'),
            'add_new_item'               => __('Add New Option'), 'agence',
            'new_item_name'              => __('New Option Name', 'agence'),
            'separate_items_with_commas' => __('Separate Options with commas', 'agence'),
            'add_or_remove_items'        => __('Add or remove Options', 'agence'),
            'choose_from_most_used'      => __('Choose from the most used Options', 'agence'),
            'not_found'                  => __('No Options found.', 'agence'),
            'no_terms'                   => __('No Options', 'agence'),
            'items_list_navigation'      => __('Options list navigation', 'agence'),
            'items_list'                 => __('Options list', 'agence'),
            'back_to_items'              => __('&larr; Back to Options', 'agence'),
        ]
    ]);
});

register_activation_hook(__FILE__, 'flush_rewrite_rules');
register_deactivation_hook(__FILE__, 'flush_rewrite_rules');

function agence_city($post = null): void
{
    if ($post === null) {
        $post = get_post();
    }
    $cities = get_the_terms($post, 'property_city');
    if (empty($cities)) {
        return;
    }
    $city = $cities[0];
    echo $city->name;
    $postalCode = get_field('code_postale', $city);
    if ($postalCode) {
        echo ' (' . $postalCode . ')';
    }
}

function agence_price($post = null): void
{
    if (get_field('categorie_de_bien', $post) === 'achat') {
        echo sprintf(__('%s €', 'agence'), get_field('prix', $post));
    } else {
        echo sprintf(__('%s €/mois', 'agence'), get_field('prix', $post));
    }
}

// Filtre les biens à acheter ou louer via le paramètre property_category
add_filter('query_vars', function (array $params): array {
    $params[] = 'property_category';
    $params[] = 'city';
    $params[] = 'price';
    $params[] = 'property_type';
    $params[] = 'rooms';
    return $params;
});
add_action('pre_get_posts', function (WP_Query $query) use (&$propertyCategories): void {

    if (is_admin() || !$query->is_main_query() || !is_post_type_archive('property')) {
        return;
    }

    $city = get_query_var('city');
    if ($city) {
        $tax_query = $query->get('tax_query', []);
        $tax_query[] = [
            'taxonomy' => 'property_city',
            'terms' => $city,
            'field' => 'slug'
        ];
        $query->set('tax_query', $tax_query);
    }

    $price = (int)get_query_var('price');
    if ($price) {
        $meta_query = $query->get('meta_query', []);
        $meta_query[] = [
            'key' => 'prix',
            'value' => $price,
            'compare' => '<=',
            'type' => 'NUMERIC'
        ];
        $query->set('meta_query', $meta_query);
    }

    $rooms = (int)get_query_var('rooms');
    if ($rooms) {
        $meta_query = $query->get('meta_query', []);
        $meta_query[] = [
            'key' => 'chambres',
            'value' => $rooms,
            'compare' => '>=',
            'type' => 'NUMERIC'
        ];
        $query->set('meta_query', $meta_query);
    }
});
