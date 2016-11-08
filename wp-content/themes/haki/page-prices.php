<?php get_header(); ?>
<?php
$content_post = get_post(76);
$content = $content_post->post_content;
echo $content;
?>
<?php get_footer();?>