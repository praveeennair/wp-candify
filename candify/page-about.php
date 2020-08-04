<?php
/**
 * Template Name: About Page 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package candify
 */
get_header();  
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post -> ID)); 
?>
<?php
		if(has_post_thumbnail()){ ?>
                <section class="about"  style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;">
                        <div class="hero-text w-100 text-white px-2 px-sm-0">
                            <h1 class="display-3 brand"><?php echo the_title(); ?></h1>
                        </div>
                </section>
         <?php	} else{	?>
            <section class="about">
                        <div class="hero-text w-100 text-white px-2 px-sm-0">
                            <h1 class="display-3 brand"><?php echo the_title(); ?></h1>
                        </div>
                </section>
            <?php } ?>

    <!-- ====================================
                    About us       
         ==================================== -->
         <?php
               $img = get_field('image');
               $title = get_field('title');
               $para = get_field('para');
         ?>
         <section id="about">
            <div class="container-fluid m-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-4 order-2 order-md-1 p-0">
                        <img src="<?php echo $img['url']?>" class=" img-fluid " alt="milk">   
                    </div>
        
                    <div class="col-md-8 text-center order-1 order-md-2 ">
                        <div class="row justify-content-center">
                            <div class="col-10 col-lg-8 blk mb-5 mb-md-0">
                                <h2 ><?php echo $title ?></h2>
                                <p><?php echo $para ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>


<?php
get_footer();
?>
