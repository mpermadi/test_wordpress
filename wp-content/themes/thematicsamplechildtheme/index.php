<?php
/**
 * Index Template
 *
 * This file is required by WordPress to recoginze Thematic as a valid theme.
 * It is also the default template WordPress will use to display your web site,
 * when no other applicable templates are present in this theme's root directory
 * that apply to the query made to the site.
 * 
 * WP Codex Reference: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Thematic
 * @subpackage Templates
 */

	// calling the header.php
	get_header();
	
	// action hook for placing content above #container
	thematic_abovecontainer();
?>

		<table class="main" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
			<tr>
				<th class="top" style="height:0px;" colspan="5"></th>
			</tr>
			<tr>
				<th class="side"></th>
				<td class="main" width="200" valign="top" align="left" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/img/bgammo.jpg');">
				<?php
					thematic_sidebar();
					get_sidebar('1st-subsidiary-aside');
				?>
				</td>
				<td class="main" valign="top" align="left">
				
					tes2
				
				</td>
				<td class="main" width="200" valign="top" align="left" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/img/bgammo.jpg');">
				<?php
					get_sidebar('index-top');
				?>
				</td>
				<th class="side"></th>
			</tr>
			<tr>
				<th class="bottom" style="height:0px;" colspan="5"></th>
			</tr>
			</tbody>
		</table>
		
<?php
	// action hook for placing content below #container
	thematic_belowcontainer();
	
	// calling the standard sidebar 
	thematic_sidebar();
	
	// calling footer.php
	get_footer();
?>