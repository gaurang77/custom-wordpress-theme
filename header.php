<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
       
    <div id="slide-out"> 
        <ul>
            <li> <a href="<?php echo site_url(''); ?>" 
            <?php if(is_front_page()) echo 'class="active1"';?>
            >Home </a> 
            </li>
            <li> <a href="<?php echo site_url('/blogs'); ?>"
            <?php if(get_post_type()=='post') echo 'class="active1"';?>
            >Blogs</a> </li>
            <li> <a href="<?php echo site_url('/projects'); ?>"
            <?php if(get_page_uri()=='projects') echo 'class="active1"';?>
            >Projects</a> </li>
            <li> <a href="<?php echo site_url('/about'); ?>"
            <?php if(get_page_uri()=='about') echo 'class="active1"';?>
            >About</a> </li>
            <li> 
                <div id="search-icon">
                  
                    <input type="text" placeholder="search here">         
                </div> 
            </li>
        </ul>
    </div> 
         
    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="<?php echo get_template_directory_uri()?>/img/duc.jpg" alt="logoimage">
            </a>
        </div>

        <i class="fas fa-bars" id="menu-icon"></i>

        <ul>
            <li> <a href="<?php echo site_url(''); ?>"
            <?php if(is_front_page()) echo 'class="active"';?>
            >HOME</a> </li>
            <li> <a href="<?php echo site_url('/blogs'); ?>"
            <?php if(get_post_type()=='post') echo 'class="active"';?>
            >BLOGS</a> </li>
            <li> <a href="<?php echo site_url('/projects'); ?>"
            <?php if(get_page_uri()=='projects') echo 'class="active"';?>
            >PROJECTS</a> </li>
            <li> <a href="<?php echo site_url('/about'); ?>"
            <?php if(get_page_uri()=='about') echo 'class="active"';?>
            >ABOUT</a> </li>
            <li> 
                <div id="search-icon">
                    <a href="#">
                        <i class = "fas fa-search"></i>
                    </a>
                    <input type="text" placeholder="search here">         
                </div> 
            </li>
        </ul>
      
    </nav>

    <div id="search-box">
        <input type="text" placeholder="search here">
    </div>    
