<?php
/**
 * The template for displaying search form
 *
 * @package Nightingale
 * @copyright NHS Leadership Academy, Tony Blacker
 * @version 1.1 21st August 2019
 */

if ( ! empty( get_search_query() ) ) {
	$query = get_search_query();
} else {
	$query = 'Search';
}
?>
<button class="nhsuk-header__search-toggle" id="toggle-search" aria-controls="search" aria-label="Open search">
	<svg class="nhsuk-icon nhsuk-icon__search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
		<path d="M19.71 18.29l-4.11-4.1a7 7 0 1 0-1.41 1.41l4.1 4.11a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 10a5 5 0 1 1 5 5 5 5 0 0 1-5-5z"></path>
	</svg>
	<span class="nhsuk-u-visually-hidden">Search</span>
</button>
<div class="nhsuk-header__search-wrap" id="wrap-search">
	<form class="nhsuk-header__search-form" id="search" action="/" method="get" role="search">
		<label class="nhsuk-u-visually-hidden" for="search-field">Search the NHS website</label>
		<div class="autocomplete-container" id="autocomplete-container"></div>
		<input class="nhsuk-search__input" id="search-field" name="s" type="search" placeholder="Search" autocomplete="off">
		<button class="nhsuk-search__submit" type="submit">
			<svg class="nhsuk-icon nhsuk-icon__search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
				<path d="M19.71 18.29l-4.11-4.1a7 7 0 1 0-1.41 1.41l4.1 4.11a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 10a5 5 0 1 1 5 5 5 5 0 0 1-5-5z"></path>
			</svg>
			<span class="nhsuk-u-visually-hidden">Search</span>
		</button>
		<button class="nhsuk-search__close" id="close-search">
			<svg class="nhsuk-icon nhsuk-icon__close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
				<path d="M13.41 12l5.3-5.29a1 1 0 1 0-1.42-1.42L12 10.59l-5.29-5.3a1 1 0 0 0-1.42 1.42l5.3 5.29-5.3 5.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l5.29-5.3 5.29 5.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z"></path>
			</svg>
			<span class="nhsuk-u-visually-hidden">Close search</span>
		</button>
	</form>
</div>

