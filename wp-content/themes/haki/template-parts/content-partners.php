<?php
$args = array(

    'post_type' => 'partners',

    'publish' => true,

    'paged' => get_query_var('paged'),

    'posts_per_page' => -1,

    'orderby' => array('menu_order' => 'ASC' )

);

$partners = new WP_Query($args);
?>
<?php if ($partners->have_posts()): ?>
<!-- SECTION 5 -->
<section class="s5">
    <div class="wrapper">
        <h2 class="title">
            Наши партнеры
        </h2>
        <div class="slider-s5">
            <?php
            while ( $partners->have_posts() ) :
                $partners->the_post();
                $partner_image = get_field('partner_image');
                ?>
                <a href="<?php echo $partner_image['url']; ?>" class="zoom" rel="group"><img src="<?php echo $partner_image['url']; ?>" alt="pic"></a>
            <?php endwhile; ?>

        </div>
    </div>
</section>
<?php endif; ?>