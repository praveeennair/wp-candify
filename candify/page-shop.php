<?php
/**
 * Template Name: Contact Page 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * */
get_header();  
?>
     <!-- ====================================
                    coursel       
         ==================================== -->
         <section class="slider mt-5">
             <?php
                $img1 = get_field('cimg1');
                $img2 = get_field('cimg2');
                $img3 = get_field('cimg3');
             ?>
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $img1['url']; ?>" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo $img2['url']; ?>" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo $img3['url']; ?>" class="d-block w-100" alt="...">
                      </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
        </section>

      <!--   ====================================
                     card       
         ==================================== -->
         <section id="cards">
        <div class="container-fluid">
            <div class="row my-5">
                <div class="col-12">
                    <h2 class="display-4 text-center">Our Special</h2>
                </div>
            </div>
            <div class="row">
              <div class="col-12">
              <div class="carousel-wrap">
                    <div class="owl-carousel d-flex">             
        <?php $loop = new WP_Query( array( 'post_type' => 'card',) ); ?>
             <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="item">
                          <div class="card m-1" style="width: 18rem;">
                            <img class="img-fluid card-img-top" src="<?php the_post_thumbnail();?>  
                            <div class="card-body">
                              <h5 class="card-title"><?php the_title(); ?></h5>
                              <p class="card-text"><?php the_content(); ?></p>
                              <select name="order" class="form-control " id="iccake">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                              </select>
                              <a href="#" class="btn btn-primary btn-block mt-1">Add to Cart</a>
                            </div>
                          </div> 
                        </div>
               <?php endwhile; ?>
                    </div>
                </div>
            
            </div>  
            </div>
        </div>
    </section>




<?php
get_footer();
?>