<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package candify
 */
    $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post -> ID));
    $btn_1_url =  get_field('button_1_url');
    $btn_1_text=  get_field('button_text_1');
    $btn_2_url =  get_field('button_2_url');
    $btn_2_text=  get_field('button_text_2');
get_header();
?>

        <!-- ====================================
                    hero    
         ==================================== -->
         <?php
        if(has_post_thumbnail()){ ?>
           <section class="hero" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;">
				<div class="hero-text w-100 text-white px-2 px-sm-0">
                    <h1 class="display-2 brand"><?php bloginfo('name') ?></h1>
                    <p class="lead mb-4"><?php bloginfo('description') ?></p>
                    <a class="btn bt mr-2 text-white" href="<?php echo $btn_1_url; ?>"><?php echo $btn_1_text; ?></a>
                    <a class="btn bt ml-2 text-white" href="<?php echo $btn_2_url; ?>"><?php echo  $btn_2_text; ?></a>  
                </div>
	</section>

	<?php	} else{	?>

        <section class="hero">
				<div class="hero-text w-100 text-white px-2 px-sm-0">
                    <h1 class="display-2 brand"><?php bloginfo('name') ?></h1>
                    <p class="lead mb-4"><?php bloginfo('description') ?></p>
                    <a class="btn bt mr-2 text-white" href="<?php echo $btn_1_url; ?>"><?php echo $btn_1_text; ?></a>
                    <a class="btn bt ml-2 text-white" href="<?php echo $btn_2_url; ?>"><?php echo  $btn_2_text; ?></a>  
                </div>
	</section>
	<?php } ?>

      
	    <!-- ====================================
                    candy       
         ==================================== -->
               <?php
                $img1 = get_field('img1');
                $title1 = get_field('title1');
                $icon1 = get_field('icon1');
                $content1 = get_field('content1');
      ?>
    <section class="candy px-0 ">  
             <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 order-2 order-md-1 p-0">
                            <img src="<?php echo $img1['url']; ?>" class="img-fluid" alt="milk">   
                        </div>
            
                        <div class="col-md-6 text-center order-1 order-md-2 ">
                            <div class="row justify-content-center">
                                <div class="col-10 col-lg-8 blk mb-5 mb-md-0">
                                    <h2><?php echo  $title1; ?></h2>
                                    <img class="d-none d-lg-inline" src="<?php echo $icon1['url']; ?>" alt="logo">
                                    <p> <?php echo $content1 ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
             </div>
         </section>


   
    <!-- ====================================
                    row 2      
         ==================================== -->
         <?php
                $img2 = get_field('img2');
                $title2 = get_field('title2');
                $icon2 = get_field('icon2');
                $content2 = get_field('content2');
      ?>
         <section class="container-fluid px-0 cont">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-2 p-0">
                    <img src="<?php echo $img2['url']; ?>" class="img-fluid" alt="milk">
                    
                </div>
                <div class="col-md-6 text-center order-1 order-md-1 mb-5 mb-md-0">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blk">
                            <h2><?php echo  $title2; ?></h2>
                            <img class="d-none d-lg-inline" src="<?php echo $icon2['url']; ?>" alt="logo">
                            <p><?php echo $content1 ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================
                    row 3       
         ==================================== -->
         <?php
                $img3 = get_field('img3');
                $title3 = get_field('title3');
                $icon3 = get_field('icon3');
                $content3 = get_field('content3');
      ?>
    <section class="candy px-0 ">  
             <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 order-2 order-md-1 p-0">
                            <img src="<?php echo $img3['url']; ?>" class="img-fluid" alt="milk">   
                        </div>
            
                        <div class="col-md-6 text-center order-1 order-md-2 ">
                            <div class="row justify-content-center">
                                <div class="col-10 col-lg-8 blk mb-5 mb-md-0">
                                    <h2><?php echo  $title3; ?></h2>
                                    <img class="d-none d-lg-inline" src="<?php echo $icon3['url']; ?>" alt="logo">
                                    <p> <?php echo $content3 ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
             </div>
         </section>

<?php
get_footer();
?>







