<?php get_header(); ?>

<br>
<br>
<br>
<br>
<main>

<h2 class="section-heading">PROJECTS</h2>

<section>

<?php
$ar = array(
    "post_type"=>"project",
    "posts_per_page"=>2,
);

$blo = new WP_Query($ar);

while($blo->have_posts()){
    $blo->the_post();
?>


    <div class="card">
        <div class="card-image">
            <a href="<?php echo the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="card-image">
            </a>
        </div>
        <div class="card-desc">
            <a href="<?php echo the_permalink();?>">
                <h3><?php the_title();?></h3>
            </a>
            <p>
            <?php echo wp_trim_words(get_the_excerpt(),30);?>
            </p>
            <a href="<?php echo the_permalink();?>" class="btn-readmore">Read More</a>
        </div>    
    </div>
<?php 
}   
wp_reset_query(); 
?>

</section>
</main>

<h3><?php// echo get_page_uri(); ?> </h3>

<?php get_footer(); ?>