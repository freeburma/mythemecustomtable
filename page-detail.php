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
    <div class="row justify-content-center align-items-center">
        <h4 class="detail-heading"><?php echo $prod-> Title; ?></h4>
    </div>
    <!-- Cards -->
    <div class="row">
        <div class="flex-container-detail">
            <div class="imageDetail">
                <img class="card-img-top" src="<?php echo get_template_directory_uri() . "/" . $prod->FilePath . "/" . $prod->ImageName_1; ?>" alt="Card image" style="width:100%">
            </div>

            <div class="description">
                <p class="card-text"><?php echo $prod->ProductDescription; ?></p>
            </div>
        </div> <!-- End Col-->
    </div><!-- End row -->

    <br />
    

    
</div><!-- End Container -->

<?php get_footer(); ?>
