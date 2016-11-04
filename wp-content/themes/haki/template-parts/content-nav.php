<?php
$post = get_post(40);
?>
<!-- SECTION 1 -->
<section class="s1">
    <div class="wrapper">
        <div class="flex_between-sm_top">
            <ul class="nav">
                <li><a href="<?php echo get_site_url();?>/">Главная</a></li>
                <li><a href="<?php echo get_site_url();?>/events">События</a></li>
                <li><a href="<?php echo get_site_url();?>/arsenal">Арсенал</a></li>
                <li><a href="<?php echo get_site_url();?>/polygons">Полигоны</a></li>
                <li><a href="<?php echo get_site_url();?>/feedbacks">Отзывы</a></li>
                <li><a href="<?php echo get_site_url();?>/prices">Цены</a></li>
                <li><a href="<?php echo get_site_url();?>/constacts">Контакты</a></li>
            </ul>
            <div class="content">
                <p class="subtitle">
                    <?php echo $post->post_title; ?>
                </p>
                <p class="text">
                    <?php echo $post->post_content; ?>
                </p>
            </div>
        </div>
    </div>
</section>