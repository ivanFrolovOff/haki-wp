<?php
$args = array(

    'post_type' => 'gallery',

    'publish' => true,

    'paged' => get_query_var('paged'),

    'posts_per_page' => -1,

    'orderby' => array('menu_order' => 'ASC' )

);

$gallery = new WP_Query($args);
?>
<?php if ($gallery->have_posts()): ?>
<!-- SECTION 2 -->
<section class="s2">
    <div class="wrapper">
        <h2 class="title">
            Фотогаллерея
        </h2>


        <div class="slider-s2-min">
            <?php
            while ( $gallery->have_posts() ) :
                $gallery->the_post();
                $photo = get_field('photo');
                ?>
                <img src="<?php echo $photo['url']; ?>" alt="pic">
            <?php endwhile; ?>
        </div>
        <div class="slider-s2">
    <?php
    while ( $gallery->have_posts() ) :
        $gallery->the_post();
        $photo = get_field('photo');
        ?>
            <img src="<?php echo $photo['url']; ?>" alt="pic">
    <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>