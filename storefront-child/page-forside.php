<?php get_header(); ?>

<?php while(have_posts()): the_post() ?>

<div class="frontpage_text">
    <p> <?php the_field("frontpage_heading") ?> 
    <p> <?php the_field("frontpage_text") ?>
    <p> <?php the_field("frontpage_text_two") ?>
    <p> <?php the_field("frontpage_greetings") ?>
</div>
<?php endwhile; ?>

<?php

get_footer(); ?>