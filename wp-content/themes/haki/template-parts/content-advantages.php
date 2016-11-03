<?php
$args = array(

    'post_type' => 'advantages',

    'publish' => true,

    'paged' => get_query_var('paged'),

    'posts_per_page' => -1,

    'orderby' => array('menu_order' => 'ASC' )

);

$advantages = new WP_Query($args);
?>
<?php if ($advantages->have_posts()): ?>
<!-- SECTION 3 -->
<section class="s3">
    <div class="wrapper">
        <h2 class="title">
            Наши преимущества
        </h2>
        <div class="items flex_between-sm">
            <?php
            while ( $advantages->have_posts() ) :
                $advantages->the_post();
                $advantage_image = get_field('advantage_image');
                $advantage_title = get_field('advantage_title');
                $advantage_text = get_field('advantage_text');
                ?>
                <div class="item">
                    <div class="for-img">
                        <img src="<?php echo $advantage_image['url']; ?>" alt="decor">
                    </div>
                    <p class="subtitle">
                        <?php echo $advantage_title; ?>
                    </p>
                    <p class="text">
                        <?php echo $advantage_text; ?>
                    </p>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>