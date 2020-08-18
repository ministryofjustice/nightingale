<?php
/**
 * The logo for our theme
 *
 * This is the template that displays the logo
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nightingale
 * @copyright NHS Leadership Academy, Tony Blacker
 * @version 1.0 13th January 2020
 */

$nhs_logo          = get_theme_mod( 'nhs_logo', 'no' );
$header_layout     = get_theme_mod( 'logo_type', 'transactional' );
$org_name_checkbox = get_theme_mod( 'org_name_checkbox', 'no' );
$org_name_field    = get_theme_mod( 'org_name_field' );

$show_sitename = get_theme_mod( 'show_sitename', 'yes' );


/* Check if Organisation name should be different from the site name */

$logo_line_1 = 'no' === $org_name_checkbox ? get_bloginfo( 'name' ) : get_theme_mod( 'org_name_field' );
$logo_line_2 = 'no' === $org_name_checkbox ? get_bloginfo( 'description' ) : get_bloginfo( 'name' );


if ( has_custom_logo() ) {
	?>
	<div class="nhsuk-header__logo">
		<?php the_custom_logo(); ?>
		<?php if ( $show_sitename === 'yes' ) { ?>
			<div class="nhsuk-header__transactional-service-name">
				<a class="nhsuk-header__transactional-service-name--link" href="<?php echo esc_url_raw( get_home_url() ); ?>"><?php echo esc_html( $logo_line_1 ); ?></a>
			</div>
			<?php
		}
		?>
	</div>
	<?php
}
else {
	?>
	<div class="nhsuk-header__logo">
		<a class="nhsuk-header__link" href="<?php echo esc_url_raw( get_home_url() ); ?>" aria-label="<?php bloginfo( 'name' ); ?> homepage">
            <?php if ( $show_sitename === 'yes' ) { ?>
                <span class="nhsuk-organisation-name"><?php echo esc_html( $logo_line_1 ); ?></span>
            <?php } ?>
			<span class="nhsuk-organisation-descriptor"><?php echo esc_html( $logo_line_2 ); ?></span>
		</a>
	</div>
	<?php
}
