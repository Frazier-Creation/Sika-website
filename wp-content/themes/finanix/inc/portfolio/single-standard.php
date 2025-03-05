
<!-- Portfolio Detail Start -->

    <div class="reactheme-porfolio-details">
 
        <?php while ( have_posts() ) : the_post();
           
           
        ?>
           
        <div class="row">
            <div class="col-lg-12">
                <div class="project-desc">       
                   <?php  the_content(); ?>
                </div>                
            </div>         
        </div>

      <?php endwhile; ?>   
       
      </div>

<!-- Portfolio Detail End -->