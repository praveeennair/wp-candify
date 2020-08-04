<?php
/**
 * Template Name: Fullwidth Page 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * */
get_header();  
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post -> ID)); 
?>
<?php
		if(has_post_thumbnail()){ ?>
                <section class="about"  style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;">
                        <div class="hero-text w-100 text-white px-2 px-sm-0">
                            <h1 class="display-3 brand"><?php echo the_title(); ?></h1>
                            <p class="lead"><?php echo the_excerpt();   ?></p>
                        </div>
                </section>
         <?php	} else{	?>
            <section class="about">
                        <div class="hero-text w-100 text-white px-2 px-sm-0">
                            <h1 class="display-3 brand"><?php echo the_title(); ?></h1>
                            <p class="lead"><?php echo the_excerpt(); ?></p>
                        </div>
                </section>
            <?php } ?>
            <!-- ==================================
                    Contact form
                 ================================== -->
                


            <!-- =================================
                            icons
                 ================================= -->
          <?php
                $addr   = get_field('address');
                $phone  = get_field('phone');
                 $email = get_field('email');
          ?>
         <div class="col-md-3 mt-5 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x text-pink"></i>
                    <p class="text-pink"> <?php echo $addr ?>   </p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x text-pink"></i>
                    <p class="text-pink"><?php echo $phone ?> </p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x text-pink"></i>
                    <p class="text-pink"><?php echo $email ?></p>
                </li>
            </ul>
        </div> 

<?php
get_footer();
?>