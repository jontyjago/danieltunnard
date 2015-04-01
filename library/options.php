<?php

// Author: Jonathan Evans

//Start Tunnard Options
//***********************
// Options Page Functions

add_action( 'admin_menu', 'tunnard_options_menu' );

function tunnard_options_menu() {
	add_menu_page( 'Tunnard Options', 'Tunnard Options', 'manage_options', 'tunnard-user-options', 'tunnard_options_page', '', 99 );
}

function tunnard_options_page() {
	//if we got here with a POST, update the database with the new options
	if (isset($_POST['update_tunnard_options'])) {
        if ( $_POST['update_tunnard_options'] == 'true' ) { tunnard_options_update(); }
    }
	// here's the main function that will generate our options page
?>

<!--Options Markup-->
<div class="wrap">
    <div id="icon-themes" class="icon32"><br />
    </div>
    <h2>Tunnard Options</h2>
    <form method="POST" action="">
        <input type="hidden" name="update_tunnard_options" value="true" />
        <h3>Homepage Text</h3>
        <p>This is the text for the homepage bio. Keep it short and sweet.</p>
        <p>English</p>
        <textarea name="home-bio-en" id="home-bio-en" cols=60 rows=6><?php esc_attr_e( get_option( 'home-bio-en' ) ); ?></textarea>
        <p>Espa&ntilde;ol</p>
        <textarea name="home-bio-es" id="home-bio-es" cols=60 rows=6><?php esc_attr_e( get_option( 'home-bio-es' ) ); ?></textarea>

        <h3>Latest Posts</h3>
        <p>Latest Posts text</p>
        <p><input type="text" name="latest-en" id="latest-en" size="48" value="<?php esc_attr_e( get_option( 'latest-en' ) ); ?>" required /> English</p>
        <p><input type="text" name="latest-es" id="latest-es" size="48" value="<?php esc_attr_e( get_option( 'latest-es' ) ); ?>" required /> Espa&ntilde;ol</p>

        <h3>Links</h3>
        <p>The links for the Twitter, Facebook and Contact icons in the header</p>
        <p><input type="url" name="twitter-link" id="twitter-link" size="48" value="<?php esc_attr_e( get_option( 'twitter-link' ) ); ?>" required /> Twitter</p>
        <p><input type="url" name="facebook-link" id="facebook-link" size="48" value="<?php esc_attr_e( get_option( 'facebook-link' ) ); ?>" required /> Facebook</p>
        <p><input type="url" name="contact-link" id="contact-link" size="48" value="<?php esc_attr_e( get_option( 'contact-link' ) ); ?>" required /> Contact</p>

        <!-- submit button -->
        <p><input type="submit" name="search" value="Update Options" class="button" /></p>
    </form>
</div>

<?php
}
function tunnard_options_update() {
	// this is where validation would go
	update_option( 'home-bio-en', stripslashes($_POST['home-bio-en']) );
    update_option( 'home-bio-es', stripslashes($_POST['home-bio-es']) );
    update_option( 'latest-en', stripslashes($_POST['latest-en']) );
    update_option( 'latest-es', stripslashes($_POST['latest-es']) );
    update_option( 'twitter-link', stripslashes($_POST['twitter-link']) );
    update_option( 'facebook-link', stripslashes($_POST['facebook-link']) );    
    update_option( 'contact-link', stripslashes($_POST['contact-link']) );
}