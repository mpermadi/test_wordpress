<?php
/**
 * Header Template
 *
 * This template calls a series of functions that output the head tag of the document.
 * The body and div #main elements are opened at the end of this file. 
 * 
 * @package Thematic
 * @subpackage Templates
 */
 
	// Create doctype
	thematic_create_doctype();
	echo " ";
	language_attributes();
	echo ">\n";
	
	// Opens the head tag 
	thematic_head_profile();
	
	// Create the meta content type
	thematic_create_contenttype();
	
	// Create the title tag 
	thematic_doctitle();
	
	// Create the meta description
	thematic_show_description();
	
	// Create the tag <meta name="robots"  
	thematic_show_robots();
	
	// Legacy feedlink handling
	if ( current_theme_supports( 'thematic_legacy_feedlinks' ) ) {    
		// Creating the internal RSS links
		thematic_show_rss();
	
		// Create comments RSS links
		thematic_show_commentsrss();
	}
	
	// Create pingback adress
	thematic_show_pingback();
	
	/* The function wp_head() loads Thematic's stylesheet and scripts.
	 * Calling wp_head() is required to provide plugins and child themes
	 * the ability to insert markup within the <head> tag.
	 */
	wp_head();
?>
</head>

<?php 
	// Create the body element and dynamic body classes
	thematic_body();

	// Action hook to place content before opening #wrapper
	thematic_before(); 
?>
	<?php
		// Filter provided for removing output of wrapping element follows the body tag
		if ( apply_filters( 'thematic_open_wrapper', true ) ) 
  		  echo ( '<div id="wrapper" class="hfeed">' );

		// Action hook for placing content above the theme header
		thematic_aboveheader(); 
	?>


		<?php
			// Filter provided for altering output of the header opening element
			echo ( apply_filters( 'thematic_open_header',  '<div id="header">' ) );
    	?>

    	<center>
				<table cellspacing="0" cellpadding="0" width="100%" border="0">
					<tbody>
						<tr>
							<td align="left">                    </td>
							<td align="center">
								<a target="_blank" href="http://www.firearmsforsale.com/a/1/2">
								<img width="500" height="50" border="0" alt="Ammo for sale at FirearmsForSale" src="wp-content/uploads/2014/11/firearmsforsale-banner2.png">
								</a>
							</td>
							<td align="center">
								<button id="login_register" class="cb ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only cboxElement" href="/?login=1&from=main&ru=http%3A%2F%2Fammoseek.com%2F" role="button" aria-disabled="false">
								<span class="ui-button-text">Log In / Join</span>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
			</center>
    	<?php  	
    		// Filter provided for altering output of the header closing element
			echo ( apply_filters( 'thematic_close_header', '</div><!-- #header-->' ) );
		?>
		        
    	<?php
			// Action hook for placing content below the theme header
			thematic_belowheader();
    	?>
    	
	<div id="main">
