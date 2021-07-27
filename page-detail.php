<?php get_header(); ?>

<?php 
    $id = $_GET["id"]; 
    if ( empty($id))
    {
        // print('<script>window.location.href="' . esc_url(site_url( '/')) . '"</script>');
        wp_redirect(esc_url(site_url( '/'))); 

    }
    else 
    {
        global $wpdb; 

        $prod = $wpdb->get_row("SELECT * FROM wp_custom_inventory WHERE Id = " . $id); 

        if ( empty($prod) || (! isset($prod)))
        {
            wp_redirect(esc_url(site_url( '/'))); 

        }// end if 
    }
    // echo $id; 
?>

<div class="container bodyHeight">
    <h2>Detail Page</h2>

    <!-- Cards -->
    <div class="row">
        <div class="col-md-12">
                <div class="card" >
                    <img class="card-img-top" src="<?php echo get_template_directory_uri() . "/" . $prod->FilePath . "/" . $prod->ImageName_1; ?>" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title"> <?php echo $prod-> Title; ?> </h4>
                        <p class="card-text"><?php echo wp_trim_words($prod->ProductDescription, 50, ' ...'); ?></p>
                        <a href="<?php echo esc_url(site_url( '/')) ?>" class="btn btn-text">Home</a>
                    </div>
                </div><!--End card -->
        </div> <!-- End Col-->

    </div><!-- End row -->
</div><!-- End Container -->

<?php get_footer(); ?>
