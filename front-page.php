
<?php get_header(); ?>
    <div id="banner">
        <h1>WORDPRESS</h1>
        <h3>make themes</h3>
    </div>

    <main>

        <h2 class="section-heading">ALL BLOGS</h2>

        <section>

        <?php
        $ar = array(
            "post_type"=>"post",
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

        <h2 class="section-heading">ALL POJECTS</h2>

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
            

        <h2 class="section-heading">Source code</h2>

        <section id="section-source">
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Provident excepturi laborum rem ipsam possimus eligendi maxime 
                sapiente esse optio sed perspiciatis, numquam repellendus iste a 
                consectetur. Eaque exercitationem qui consequuntur?
            </p>
            <a href="" class="btn-readmore">Github profile</a>
        </section> 
    </main>
  
    <?php get_footer(); ?>