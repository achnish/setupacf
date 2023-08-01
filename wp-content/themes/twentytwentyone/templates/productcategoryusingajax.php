<?php

/**
 * Template Name: xyz
 */


get_header();

$args =[
    'post_type' => 'movie',
    'posts_per_page' => -1,
    ];

    $movies = new WP_Query($args); ?>
    <main>

        <div class="movie_container" style="width: 80%; margin: 0 auto;">
            <br>
            <div class="js-filter">
                <?php $terms = get_terms(['taxonomy'=>'movie_type']);
                if($terms):?>
                    <select id="cat" name="cat">
                        <option value="">Select Category</option>
                        <?php foreach ($terms as $term): ?>
                            <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                        <?php endforeach;?>
                    </select>
                <?php endif; ?>
                <select name="popularity" id="popularity">
                    <option value="">Select Popularity</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

        <?php if($movies->have_posts()): ?>
            <div class="js-movies row">
                <?php while ($movies->have_posts()): $movies->the_post();
                    get_template_part('template-parts/loop','movie');
                endwhile;
                ?>
            </div>
        <?php endif; ?>
        </div>
    </main>
<?php
get_footer();

?>
