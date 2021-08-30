<?php get_header(); ?>


    <div class="container bodyHeight">
        <h1>WordPress Plugin Development with Custom Table </h1>

        <!-- Cards -->
        <div class="row">

            <?php 
                global $wpdb; 

                $productsFromDbQuery = $wpdb->prepare(" SELECT * FROM wp_custom_inventory", null); 

                $productsFromDb = $wpdb->get_results($productsFromDbQuery); 

                

                // $productsFromDb = $wpdb->get_results("SELECT * FROM wp_custom_inventory"); // SOlved: Warning: Undefined array key 0 in C:\xampp\htdocs\tutorial\wp-includes\wp-db.php on line 1323 

                
            ?>
            <!-- cards-->
            <?php 
                foreach ($productsFromDb as $prod)
                {

            ?>
                    <div class="col-md-4">
                            <div class="card" >
                                <img class="card-img-top" src="<?php echo get_template_directory_uri() . "/" . $prod->FilePath . "/" . $prod->ImageName_1; ?>" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title"> <?php echo $prod-> Title; ?> </h4>
                                    <p class="card-text"><?php echo wp_trim_words($prod->ProductDescription, 50, ' ...'); ?></p>
                                    <a href="<?php echo esc_url(site_url( '/detail')) . "?id=" . $prod->Id ?>" class="btn btn-primary">Detail</a>
                                </div>
                            </div><!--End card -->
                    </div> <!-- End Col-->
            <?php 
                }// end foreach

            ?>

            
        </div><!-- End row -->
    </div><!-- End Container -->

<?php get_footer(); ?>
