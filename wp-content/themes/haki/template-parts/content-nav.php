<?php
$post = get_post(40);
?>
<!-- SECTION 1 -->
<section class="s1">
    <div class="wrapper">
        <div class="flex_between-sm_top">
            <ul class="nav">
                <li><a href="">Главная</a></li>
                <li><a href="">События</a></li>
                <li><a href="">Арсенал</a></li>
                <li><a href="">Полигоны</a></li>
                <li><a href="">Отзывы</a></li>
                <li><a href="">Цены</a></li>
                <li><a href="">Контакты</a></li>
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