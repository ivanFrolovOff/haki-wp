<?php
$post = get_post(42);
?>
<!-- SECTION 4 -->
<section class="s4">
    <div class="wrapper">
        <div class="content">
            <h2 class="title">
                <?php echo $post->post_title; ?>
            </h2>
            <?php echo $post->post_content; ?>
            <button class="btn small">
                Подробнее
            </button>
        </div>
    </div>
</section>