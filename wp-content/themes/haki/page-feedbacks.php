<?php get_header(); ?>
<?php
$content_post = get_post(74);
$content = $content_post->post_content;
echo $content;
?>
<?php get_footer();?>