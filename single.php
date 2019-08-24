<?php get_header();?>
<br>
<br>
<br>
<br>
<br>

<?php
while(have_posts()){
    the_post();
?>
<main>
    <h2 class="page-heading"> <?php the_title();?> </h2>
    <?php if(has_post_thumbnail())?>
    <img class="ipage" 
    src=<?php 
    echo get_the_post_thumbnail(get_the_ID());
    ?> >
    <p class="p-page">
    <?php the_content();?>
    </p>

</main>
<?php
}
?>

<?php get_footer(); ?>