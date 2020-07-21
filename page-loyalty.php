<?php get_header(); ?> 

<?php $url = get_template_directory_uri(  ).'/assets/';

?>
  <div class="loyalty-banner inner-page-bnr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 m-auto">
                        <h2><?php _e('TechFlyte','techflyte');?></h2>
                        <h2><span><?php _e('Flyers Plus Program','techflyte');?></span></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero section End -->
        <!-- Loyalty Program section -->
        <div class="loyalty-program">
            <div class="row">
                <div class="col-12">
                    <div class="inner-content-wrap">
                        <h2><?php _e('TechFlyte Flyers Plus Program','techflyte');?></h2>
                        <div class="row">
                            <div class="col-lg-7">
                                <h4><?php echo  get_theme_mod('loyalty_subtitle');?></h4>
                                <p>
                                   <?php echo get_theme_mod('loyalty_description'); ?> 
                                </p>
                            </div>
                            <div class="col-lg-5">
                                <div class="program-bnr">
                                    <img class="img-fluid" src="<?php echo get_theme_mod('loyalty_image');?>" alt="">
                                </div>
                            </div>
                        </div>
                        <h5><?php _e('Flyers Plus Program Details','techflyte');?></h5>
                        <div class="row justify-content-center">
                            <?php get_template_part( 'partials/content','loyalty');?>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                 <p><?php echo get_theme_mod('loyalty_description_secondary');?></p>
                                <p><span><?php _e('Have questions regarding the program? Reach out to your TechFlyte recruiter or email HR@techflyte.com','techflyte');?></span></p>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>



<?php get_footer();?>